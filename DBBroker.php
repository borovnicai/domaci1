<?php

class DBBroker
{
    private $connection;
    private $filmFactory;
    private $salaFactory;
    private $prikazivanjeFactory;

    public function __construct()
    {
        $this->connection = new Mysqli('localhost', 'root', '', 'bioskop');
        $this->connection->set_charset('utf8');
        $this->filmFactory = new FilmFactory();
        $this->salaFactory = new SalaFactory();
        $this->prikazivanjeFactory = new PrikazivanjeFactory();
    }

    public function vratiFilmove()
    {
        $niz = [];
        $upit = "SELECT * FROM film";

        $rs = $this->connection->query($upit);

        while($red = $rs->fetch_object()){
            $niz[] = $this->filmFactory->napraviObjekat($red);
        }

        return $niz;
    }

    public function vratiFilmoveKojiSePrikazujuUBuducnosti()
    {
        $niz = [];
        $upit = "SELECT f.filmID, f.* FROM film f JOIN prikazivanje p ON f.filmID = p.filmID where p.dan > NOW() GROUP BY f.filmID";

        $rs = $this->connection->query($upit);

        while($red = $rs->fetch_object()){
            $niz[] = $this->filmFactory->napraviObjekat($red);
        }

        return $niz;
    }

    public function vratiSale()
    {
        $niz = [];
        $upit = "SELECT * FROM sala";

        $rs = $this->connection->query($upit);

        while($red = $rs->fetch_object()){
            $niz[] = $this->salaFactory->napraviObjekat($red);
        }

        return $niz;
    }

    public function vratiSvaPrikazivanja()
    {
        $niz = [];
        $upit = "SELECT * FROM film f JOIN prikazivanje p ON f.filmID = p.filmID JOIN sala s on p.salaID = s.salaID";

        $rs = $this->connection->query($upit);

        while($red = $rs->fetch_object()){
            $niz[] = $this->prikazivanjeFactory->napraviObjekat($red);
        }

        return $niz;
    }

    public function vratiSvaPrikazivanjaPoFilmuISortirano($film, $sort)
    {
        $niz = [];
        $upit = "SELECT * FROM film f JOIN prikazivanje p ON f.filmID = p.filmID JOIN sala s on p.salaID = s.salaID WHERE f.filmID = " .$film . " ORDER BY p.dan " . $sort;

        $rs = $this->connection->query($upit);

        while($red = $rs->fetch_object()){
            $niz[] = $this->prikazivanjeFactory->napraviObjekat($red);
        }

        return $niz;
    }

    public function unesiPrikazivanje($dan, $film, $sala)
    {
        $upit = "INSERT INTO prikazivanje VALUES (null, '$dan', $film, $sala)";

        return $this->connection->query($upit);
    }

    public function promeniSalu($prikazivanje, $sala)
    {
        $upit = "UPDATE prikazivanje SET salaID= $sala WHERE id = $prikazivanje";

        return $this->connection->query($upit);
    }

    public function obrisiPrikazivanje($prikazivanje)
    {
        $upit = "DELETE FROM prikazivanje WHERE id = $prikazivanje";

        return $this->connection->query($upit);
    }
}
