<?php

// Classe animali
class Animals
{
    public $name;

    function __construct($_name)
    {
        $this->name = $_name;
    }
}

// Aggiungo gli animali (istanze)
$cane = new Animals('cane');
$gatto = new Animals('gatto');
$pesce = new Animals('pesce');
$uccello = new Animals('uccello');
