<?php

class PrikazivanjeFactory extends DomenFactory
{
    public function napraviObjekat($redIzBaze)
    {
        $film = new Film();
        $film->setFilmID($redIzBaze->filmID);
        $film->setNazivFilma($redIzBaze->nazivFilma);
        $film->setReziser($redIzBaze->reziser);
        $film->setTrajanje($redIzBaze->trajanje);

        $sala = new Sala();
        $sala->setSalaID($redIzBaze->salaID);
        $sala->setNazivSale($redIzBaze->nazivSale);

        $prikazivanje = new Prikazivanje();
        $prikazivanje->setDan($redIzBaze->dan);
        $prikazivanje->setId($redIzBaze->id);
        $prikazivanje->setFilm($film);
        $prikazivanje->setSala($sala);

        return $prikazivanje;
    }
}