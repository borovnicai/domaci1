<?php

class FilmFactory extends DomenFactory
{
    public function napraviObjekat($redIzBaze)
    {
        $film = new Film();
        $film->setFilmID($redIzBaze->filmID);
        $film->setNazivFilma($redIzBaze->nazivFilma);
        $film->setReziser($redIzBaze->reziser);
        $film->setTrajanje($redIzBaze->trajanje);

        return $film;
    }
}