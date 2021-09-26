<?php

class cat
{
    private $poroda = "Британец";
    private $klichka = "Дым";
    private $years = 2;
    private $okras = "grey";

    public function __construct(string $poroda, string $klichka, int $years, string $okras)
    {
        $this->poroda = $poroda;
        $this->klichka = $klichka;
        $this->years = $years;
        $this->okras = $okras;
    }

    function setPoroda(string $poroda)
    {
        $this->poroda = $poroda;
    }
    function getPoroda()
    {
        return $this->poroda;
    }

    function setKlichka(string $klichka)
    {
        $this->klichka = $klichka;
    }
    function getKlichka()
    {
        return $this->klichka;
    }

    function setYears(int $years)
    {
        $this->years = $years;
    }
    function getYears()
    {
        return $this->years;
    }

    function setOkras(string $okras)
    {
        $this->okras = $okras;
    }
    function getOkras()
    {
        return $this->okras;
    }
}

$cat_two = new cat("сфинкс", "Веста", "4", "белый");
print_r($cat_two);
echo "<br>";
$cat_two->setOkras("black");
$cat_two->setYears(5);
print_r($cat_two);
