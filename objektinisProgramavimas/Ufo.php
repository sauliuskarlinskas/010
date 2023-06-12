<?php

// klases vardas prasideda is didziosios
//vienas failas, viena klase ir daugiau nieko

class Ufo
{
    private $size = 9;
    public $speed = 5;

    private $destination = 'Moon';




    public function __construct($where, $speed = 5) //kai kuriame nauja objekta 
    {
        $this->destination = $where;
        $this->speed = $speed;
    }


    public function __destruct() //kai paskutinis kintamasis bus pasalintas is atminties - kai objektas nustos egzistuoti atmintyje, skripto pabaigoje ar po die
    {
        echo '<h1>UFO GONE</h1>';
    }

    public function __get($prop) //stebuklingas metodas - geteris
    {
        return $this->$prop; //nuskaitomi visi kintamieji


        //if ($prop == 'bebras') {
        //  return 'Bebro ner - yra Zebras';
        //}

        //if ($prop == 'destination') {
        //     return $this->destination;
        // }

        // echo "<h1>$prop</h1>";
    }

    public function __set($prop, $what) //seteris irasyti ir ant protected - kontroliuoti galima ka irasineja
    {
        if (in_array($what, ['Moon', 'Mars', 'Pluto'])) {

            $this->$prop = $what;
        }
    }



    public function where(): string
    {
        return $this->destination;
    }

    public function whatTime(): string //grazinimo tipas - lengviau tikrintis
    {
        return date('d:s');
    }

    public function turbo(): int
    {
        return $this->speed * 3; //this pakeicia i tikra objekta vygdymo metu
    }

    public function whatTimeBig(): string
    {
        return '<h1>' . $this->whatTime() . '</h1>';
    }

}