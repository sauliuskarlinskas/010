<?php

class Krepselis
{

    static private $cart;

    static public function get()
    {
        return self::$cart ?? self::$cart = new self;
    }

    private function __construct()//uzdraudimai
    {
    }
    private function __clone()//uzdraudimai
    {
    }

}