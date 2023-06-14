<?php

class Vaikas extends Tevas
{

    static public $social = 'TIK-TOK';

    static public function what()
    {

        echo static::$social;

    }
    //overloudas
    public function one(int $arg)
    {
    }

    //public function one(string $arg){}

    //construktorius

    public function __construct()
    {

        parent::__construct(); //overvraitina constuktoriu ir pasiekia savo konstruktoriu

        echo '<h1>VAIKAS</h1>';
    }


}