<?php

require_once __DIR__ . '/db.php';



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

<body class="bg-primary">
    <main>
        <div class="container">

            <!-- Sezione cibi -->
            <div class="row py-5">
                <?php foreach ($productsFood as $item) { ?>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo $item->img ?>" alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $item->itemName ?></h5>
                                <h5 class="card-subtitle"><?php echo $item->manufacturingCompany ?></h5>
                                <p class="card-text "><?php echo "Cibo per " . $item->category->name ?></p>
                                <p class="card-text"><?php echo "Peso: " . $item->peso ?></p>
                                <p class="card-text"><?php echo " Calorie: " . $item->kcals . " Data di scadenza " . $item->expire_date ?></p>
                                <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                                <p class="card-text">Prezzo:<?php echo $item->getPrice() . "$" ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- Sezione Accessori -->
            <div class="row py-5">
                <?php foreach ($productsAccessory as $item) { ?>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo $item->img ?>" alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $item->itemName ?></h5>
                                <h5 class="card-subtitle"><?php echo $item->manufacturingCompany ?></h5>
                                <p class="card-text "><?php echo "Cibo per " . $item->category->name ?></p>
                                <p class="card-text"><?php echo "Peso: " . $item->peso ?></p>
                                <p class="card-text"><?php echo " Materiale: " . $item->material . " Durabilità " . $item->durability ?></p>
                                <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                                <p class="card-text">Prezzo:<?php echo $item->getPrice() . "$" ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- Sezione Accessori -->
            <div class="row py-5">
                <?php foreach ($productsGame as $item) { ?>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo $item->img ?>" alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $item->itemName ?></h5>
                                <h5 class="card-subtitle"><?php echo $item->manufacturingCompany ?></h5>
                                <p class="card-text "><?php echo "Cibo per " . $item->category->name ?></p>
                                <p class="card-text"><?php echo "Peso: " . $item->peso ?></p>
                                <p class="card-text"><?php echo " Materiale: " . $item->material . " Grandezza: " . $item->size ?></p>
                                <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                                <p class="card-text">Prezzo:<?php echo $item->getPrice() . "$" ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </main>
</body>

</html>