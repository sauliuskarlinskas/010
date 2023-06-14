<?php

class MarsoPalydovas
{

    static private $vardas = 'Deimas';

    static public function get()
    {
        return self::$vardas ?? self::$vardas = new self;
    }

    private function __construct() //uzdraudimai
    {
    }

}