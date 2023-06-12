<?php


class Paukstis
{

    public $name, $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    public function fly() : void // kad nieko negrazina
    {
        echo '<h1>' .$this->name. ' Skrenda skrenda</h1>';
    }

    public function getArea() : string
    {
        return 'Misko dydis yra: '. rand(10,99);
    }
}