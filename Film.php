<?php

class Film
{
    private $filmID;
    private $nazivFilma;
    private $trajanje;
    private $reziser;

    /**
     * @return mixed
     */
    public function getFilmID()
    {
        return $this->filmID;
    }

    /**
     * @return mixed
     */
    public function getNazivFilma()
    {
        return $this->nazivFilma;
    }

    /**
     * @return mixed
     */
    public function getReziser()
    {
        return $this->reziser;
    }

    /**
     * @return mixed
     */
    public function getTrajanje()
    {
        return $this->trajanje;
    }

    /**
     * @param mixed $filmID
     */
    public function setFilmID($filmID)
    {
        $this->filmID = $filmID;
    }

    /**
     * @param mixed $nazivFilma
     */
    public function setNazivFilma($nazivFilma)
    {
        $this->nazivFilma = $nazivFilma;
    }

    /**
     * @param mixed $reziser
     */
    public function setReziser($reziser)
    {
        $this->reziser = $reziser;
    }

    /**
     * @param mixed $trajanje
     */
    public function setTrajanje($trajanje)
    {
        $this->trajanje = $trajanje;
    }


}