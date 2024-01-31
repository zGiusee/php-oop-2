<?php

require_once __DIR__ . '/Category.php';
// Definisco la classe padre ovvero 'Prodotti'
class Item
{

    public $manufacturingCompany;
    public $itemName;
    private $prezzo;
    public $img;
    public $category;


    public function __construct($_manufacturingCompany, $_itemName, $_prezzo, $_img, Category $_category)
    {
        $this->manufacturingCompany = $_manufacturingCompany;
        $this->itemName = $_itemName;
        $this->prezzo = $_prezzo;
        $this->img = $_img;
        $this->category = $_category;
    }

    public function getPrice()
    {
        return $this->prezzo;
    }
}
