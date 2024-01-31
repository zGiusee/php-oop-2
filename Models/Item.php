<?php

// Definisco la classe padre ovvero 'Prodotti'
class Item
{
    public $manufacturingCompany;
    public $itemName;
    public $prezzo;
    public $img;


    public function __construct($_manufacturingCompany, $_itemName, $_prezzo, $_img)
    {
        $this->manufacturingCompany = $_manufacturingCompany;
        $this->itemName = $_itemName;
        $this->prezzo = $_prezzo;
        $this->img = $_img;
    }
}
