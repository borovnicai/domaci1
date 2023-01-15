<?php

class Prikazivanje
{
    private $id;
    private $dan;
    private $film;
    private $sala;

    /**
     * @return mixed
     */
    public function getDan()
    {
        return $this->dan;
    }

    /**
     * @param mixed $dan
     */
    public function setDan($dan)
    {
        $this->dan = $dan;
    }

    /**
     * @return mixed
     */
    public function getFilm()
    {
        return $this->film;
    }

    /**
     * @param mixed $film
     */
    public function setFilm($film)
    {
        $this->film = $film;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $sala
     */
    public function setSala($sala)
    {
        $this->sala = $sala;
    }

    /**
     * @return mixed
     */
    public function getSala()
    {
        return $this->sala;
    }
}