<?php
// importo le classi
require_once __DIR__ . '/Item.php';


class ItemAccessory extends Item
{
    public $peso;
    public $material;
    public $durability;

    function __construct($_manufacturingCompany, $_itemName, $_prezzo, $_img, $_category, $_material, $_peso, $_durability)
    {
        parent::__construct($_manufacturingCompany, $_itemName, $_prezzo, $_img, $_category);
        $this->category = $_category;
        $this->peso = $_peso;
        $this->material = $_material;
        $this->durability = $_durability;
    }
}
