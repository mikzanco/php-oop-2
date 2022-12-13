<?php

require_once __DIR__ . '/database/db.php';



// prendo le categorie con le icone
// var_dump($categories);

// prendo tutti i prodotti 
// var_dump($products);

$food = array_filter($products, fn ($product) => get_class($product) == 'Food' );
$toy = array_filter($products, fn ($product) => get_class($product) == 'Toy');
$accessory = array_filter($products, fn ($product) => get_class($product) == 'Accessory');

include_once __DIR__ . '/Views/layout/head.php';
include_once __DIR__ . '/Views/layout/header.php';
include_once __DIR__ . '/Views/layout/main.php';
include_once __DIR__ . '/Views/layout/footer.php';

// var_dump($accessory);

?>

