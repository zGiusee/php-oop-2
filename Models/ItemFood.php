<?php
// importo le classi
require_once __DIR__ . '/Item.php';


class ItemFood extends Item
{
    public $peso;
    public $kcals;
    public $expire_date;

    function __construct($_manufacturingCompany, $_itemName, $_prezzo, $_img, $_category, $_kcals, $_peso, $_expire_date)
    {
        parent::__construct($_manufacturingCompany, $_itemName, $_prezzo, $_img, $_category);
        $this->peso = $_peso;
        $this->kcals = $_kcals;
        $this->expire_date = $_expire_date;
    }
}
