<?php

class SalaFactory extends DomenFactory
{
    public function napraviObjekat($redIzBaze)
    {
        $sala = new Sala();
        $sala->setSalaID($redIzBaze->salaID);
        $sala->setNazivSale($redIzBaze->nazivSale);

        return $sala;
    }
}