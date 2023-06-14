<?php

class KibirasNePo1 extends Kibiras3
{
    protected $akmenuKiekis;

    public function __construct($kiekis = 0)
    {
        $this->akmenuKiekis = $kiekis;
    }



    public function prideti1Akmeni(): void
    {
        $this->akmenuKiekis += rand(2, 5);
    }

}