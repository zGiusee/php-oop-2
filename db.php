
<?php
require_once __DIR__ . '/Models/ItemSpecific.php';
require_once __DIR__ . '/Models/Item.php';

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
