<?php

class Miskas
{
    public $color = 'Rausvas';
    
    public function getArea(): string
    {
        return 'Misko dydis yra: ' . rand(10, 99);
    }
}