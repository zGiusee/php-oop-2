<?php
// importo le classi
require_once __DIR__ . '/Item.php';

class ItemGame extends Item
{
    public $peso;
    public $material;
    public $size;

    function __construct($_manufacturingCompany, $_itemName, $_prezzo, $_img, $_category, $_material, $_peso, $_size)
    {
        parent::__construct($_manufacturingCompany, $_itemName, $_prezzo, $_img, $_category);
        $this->category = $_category;
        $this->peso = $_peso;
        $this->material = $_material;
        $this->size = $_size;
    }
}
