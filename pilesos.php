<?php

class pilesos
{
    private $color = 'black';
    private $model = 'tefal';
    private $knopka_on_off = false;
    private $shnur = "0vt";
    private $regular_power = 0;

    function __construct(string $color, string $model, bool $knopka_on_off, string $shnur, int $regular_power)
    {
        $this->color = $color;
        $this->knopka_on_off = $knopka_on_off;
        $this->model = $model;
        $this->shnur = $shnur;
        $this->regular_power = $regular_power;
    }

    function setColor(string $color)
    {
        $this->color = $color;
    }
    function getColor()
    {
        return $this->color;
    }

    function setKnopka_on_off(bool $knopka_on_off) {
        $this->knopka_on_off = $knopka_on_off;
    }
    function getKnopka_on_off()
    {
        return $this->knopka_on_off;
    }

    function setModel(string $model) {
        $this->model = $model;
    }
    function getModel()
    {
        return $this->model;
    }
    function setRegulirovka_power(int $regular_power) {
        $this->regular_power = $regular_power;
    }
    function getRegulirovka_power()
    {
        return $this->regular_power;
    }
    function setShnur(string $shnur) {
        $this->shnur = $shnur;
    }
    function getShnur()
    {
        return $this->shnur;
    }
}

$samsung = new pilesos('blue', 'samsung', 'true', '220vt', '100');
print_r($samsung);
$samsung->setColor('red');
$samsung->setRegulirovka_power('300');
echo "<br>" . $samsung->getColor() . "<br>";
echo $samsung->getRegulirovka_power();

