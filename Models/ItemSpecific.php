<?php
require_once __DIR__ . '/Animals.php';
require_once __DIR__ . '/Item.php';

// Definisco la classe figlio di prodotti ovvero 'ItemSpecific'
class ItemSpecific extends Item
{
    public $type;
    public $animal;

    function __construct($_manufacturingCompany, $_itemName, $_prezzo, $_img, $_type, Animals $_animal)
    {
        parent::__construct($_manufacturingCompany, $_itemName, $_prezzo, $_img);
        $this->type = $_type;
        $this->animal = $_animal;
    }
}
