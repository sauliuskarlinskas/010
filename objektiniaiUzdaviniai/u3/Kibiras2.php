<?php


class Kibiras2
{

    private $akmenuKiekis = 0;

    private static $akmenuKiekisVisuoseKibiruose;




    public function prideti1Akmeni(): void
    {
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++;
    }

    public function pridetiDaugAkmenu($kiekis): void
    {
        $this->akmenuKiekis += $kiekis;
        self::$akmenuKiekisVisuoseKibiruose+=$kiekis;
    }



    public function gautiAkmenuKieki()
    {
        return $this->akmenuKiekis;
    }


    public static function gautiAkmenuKiekiVisuoseKibiruose()
    {
        return self::$akmenuKiekisVisuoseKibiruose;

    }



}