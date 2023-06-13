<?php


class Zveris extends Miskas
{


    public $name, $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    public function run(): void // kad nieko negrazina
    {
        echo '<h1>' . $this->name . ' Bega bega</h1>';
    }


    public function getArea(): string
    {
        return 'Misko dydis yra: ' . rand(10, 99);
    }

}