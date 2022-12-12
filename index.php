<?php

require __DIR__ . '/Models/Category.php';
require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/Accessory.php';
require __DIR__ . '/Models/Food.php';
require __DIR__ . '/Models/Toy.php';

// $bone = new Toy(new Category('Cani', ), 94502, 'Osso', 'Ossi ossa', 2, true, );

// $bone->setImg("https://shop-cdn-m.mediazs.com/bilder/nylabone/dental/osso/gioco/per/cuccioli/9/400/186512_pla_interpet_nylabone_welpen_dental_kauknochen_1stck_hs_02_9.jpg");

include __DIR__ . '/Views/layout/head.php';
include __DIR__ . '/Views/layout/header.php';
include __DIR__ . '/Views/partials/movie.php';
include __DIR__ . '/Views/layout/footer.php';
?>

