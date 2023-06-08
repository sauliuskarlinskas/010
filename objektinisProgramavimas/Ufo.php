<?php

// klases vardas prasideda is didziosios
//vienas failas, viena klase ir daugiau nieko

class Ufo
{
    private $size = 9;
    public $speed = 5;

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