<?php

class Vaikas extends Tevas {

    use Kleopatra, Ieva {
        //Kleopatra::fun insteadof Ieva;
        Kleopatra::fun as funK;
        Ieva::fun as funI;
    }


    public function fun()
    {
        echo '<h1> I like Tik-Tok (14+)</h1> ';
    }
}