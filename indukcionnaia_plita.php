<?php

class indukcionnaia_plita
{
    public $shnur = "0vt";
    public $knopka_on_off = "off";
    public $power = 0;

    public function __construct(string $shnur, string $knopka_on_off, int $power)
    {
        $this->shnur = $shnur;
        $this->knopka_on_off = $knopka_on_off;
        $this->power = $power;
    }

    function setShnur(string $shnur)
    {
        $this->shnur = $shnur;
    }
    function getShnur()
    {
        return $this->shnur;
    }

    function setKnopka_on_off(string $knopka_on_off)
    {
        $this->knopka_on_off = $knopka_on_off;
    }
    function getKnopka_on_off()
    {
        return $this->knopka_on_off;
    }

    function setPower(int $power)
    {
        $this->power = $power;
    }
    function getPower()
    {
        return $this->power;
    }
}


$plita = new indukcionnaia_plita("220vt", "on", "8");
$plita->setPower(5);
echo "Мощность нагревания - " . $plita->getPower();


