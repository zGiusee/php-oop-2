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

// Classe animali
class Animals
{
    public $name;

    function __construct($_name)
    {
        $this->name = $_name;
    }
}

// Aggiungo gli animali
$cane = new Animals('cane');
$gatto = new Animals('gatto');
$pesce = new Animals('pesce');
$uccello = new Animals('uccello');

$Products = [
    new ItemSpecific('Royal Canin', 'Mini Adult', 4.34, 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', 'cibo', $cane),
    new ItemSpecific('Almo Nature', 'Holistic Maintenance Medium Large Tonno e Riso', 6, 'ttps://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'cibo', $cane),
    new ItemSpecific('Almo Nature', 'Cat Daily Lattina', 25, 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', 'cibo', $cane),
    new ItemSpecific('Tetra', 'Mangime per Pesci Guppy in Fiocchi', 2.56, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'cibo', $pesce),
    new ItemSpecific('Voliera', 'Wilma in Legno', 78, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'gabbia', $uccello),
    new ItemSpecific('EasyCrystal', 'Cartucce Filtranti per Filtro ', 5.33, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'acquario', $pesce),
    new ItemSpecific('Kong', 'Kong Classic', 4.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'gioco', $cane),
    new ItemSpecific('Trixie', 'Topini di peluche', 2.55, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'gioco', $gatto),
];


var_dump($Products);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <!-- Main style -->
    <link rel="stylesheet" href="./style/style.css ">
    <!-- Cdn's -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
            </div>
        </div>
    </main>
</body>

</html>