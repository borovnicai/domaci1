<?php

class Sala
{
    private $salaID;
    private $nazivSale;

    /**
     * @return mixed
     */
    public function getNazivSale()
    {
        return $this->nazivSale;
    }

    /**
     * @param mixed $nazivSale
     */
    public function setNazivSale($nazivSale)
    {
        $this->nazivSale = $nazivSale;
    }

    /**
     * @return mixed
     */
    public function getSalaID()
    {
        return $this->salaID;
    }

    /**
     * @param mixed $salaID
     */
    public function setSalaID($salaID)
    {
        $this->salaID = $salaID;
    }
}