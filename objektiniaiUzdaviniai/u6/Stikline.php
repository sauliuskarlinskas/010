<?php

class Stikline
{
    private $turis;

    private $kiekis;

    public function __construct($turis)
    {
        $this->turis = $turis;
        $this->kiekis = 0;
    }

    public function ipilti($volume): void //:self
    {
        //$this->kiekis = min($this->turis, $this->kiekis +$kiekis); kitas variantas
        //return $this;

        if ($this->turis >= $volume + $this->kiekis) {

            $this->kiekis += $volume;

        } else {

            $this->kiekis = $this->turis;

        }


    }

    public function ispilti() : int
    {
        return  $this->kiekis;
    }
}