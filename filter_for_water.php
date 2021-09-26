<?php

class filter_for_water {
    private $emkost = "0%";
    private $filter = "выкл";

    public function __construct(string $emkost, string $filter)
    {
        $this->filter = $filter;
        $this->emkost = $emkost;
    }
    function setEmkost(string $emkost)
    {
        $this->emkost = $emkost;
    }
    function getEmkost()
    {
        return $this->emkost;
    }

    function setFilter(string $filter)
    {
        $this->filter = $filter;
    }
    function getFilter(string $filter)
    {
        return $this->filter;
    }
}
$new_filter = new filter_for_water('20%', 'вкл');
print_r($new_filter);
$new_filter->setEmkost('100%');
echo "<br>" . "Уровень жидкости в фильтре - " . $new_filter->getEmkost();