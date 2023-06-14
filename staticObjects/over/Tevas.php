<?php

class Tevas
{

    static public $social = 'FB';

    static public function what()
    {

        echo self::$social;
    }


    public function __construct(){

        echo '<h1>TEVAS</h1>';
    }
}