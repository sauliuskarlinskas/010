<?php

class TV {

    static public $price = '458eur';

    public $maker = 'Samsung';

    static public function discount(): void
    {
        //$this->maker = 'Tauras'; taip negalima - i statinius dalykus netinka
        self::$price = rand(30, 100) . 'eur';
    }


    public function whatPrice(): void
    {
        echo '<h1>'. self::$price. '</h1>'; //savo klasej pasikreipti - apie kokia klase
    }

    public function changePrise(): void
    {
        self::$price = rand(300, 1000) . 'eur';
    }
}