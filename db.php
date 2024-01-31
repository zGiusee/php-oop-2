
<?php
// importo le classi
require_once __DIR__ . '/Models/ItemFood.php';
require_once __DIR__ . '/Models/ItemAccessory.php';
require_once __DIR__ . '/Models/ItemGame.php';
require_once __DIR__ . '/Models/Item.php';

// Definisco le istanze della classe category
$cane = new Category('cane');
$gatto = new Category('gatto');
$pesce = new Category('pesce');
$uccello = new Category('uccello');

// Popolo l'array con i prodotti usando le classi
$Products = [
    new ItemFood('Royal Canin', 'Mini Adult', 4.34, 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', $cane, '1230', '1,5kg', '11/06/24'),
    new ItemFood('Almo Nature', 'Holistic Maintenance Medium Large Tonno e Riso', 6, 'ttps://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', $cane, '1300', '2kg', '23/07/26'),
    new ItemFood('Almo Nature', 'Cat Daily Lattina', 25, 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', $gatto, '990', '350gr', '02/03/2030'),
    new ItemFood('Tetra', 'Mangime per Pesci Guppy in Fiocchi', 2.56, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', $pesce, '322', '200gr', '10/03/2022'),
    new ItemAccessory('Voliera', 'Wilma in Legno', 78, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', $uccello, '5gk', 'Wood', 'High'),
    new ItemAccessory('EasyCrystal', 'Cartucce Filtranti per Filtro ', 5.33, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', $pesce, '100gr', 'Carbone Attivo', 'Medium'),
    new ItemGame('Kong', 'Kong Classic', 4.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', $cane, '97gr', 'Plastic', 'Tiny'),
    new ItemGame('Trixie', 'Topini di peluche', 2.55, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', $gatto, '22gr', 'Peluche', 'Tiny'),
];
