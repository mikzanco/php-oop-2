<?php


require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Category.php';

require_once __DIR__ . '/../Models/Accessory.php';
require_once __DIR__ . '/../Models/Food.php';
require_once __DIR__ . '/../Models/Toy.php';

$toys = [
    new Toy(new Category('Dog'), 445, 'Osso', 'Ossi Osso', 3, true, "https://shop-cdn-m.mediazs.com/bilder/nylabone/dental/osso/gioco/per/cuccioli/9/400/186512_pla_interpet_nylabone_welpen_dental_kauknochen_1stck_hs_02_9.jpg", 'Oggetto gommoso per i denti del vostro cane', 'small'),
    new Toy(new Category('Cat'), 732, 'Tira graffi', 'GiocaGatto', 34, true, "https://shop-cdn-m.mediazs.com/bilder/colonna/tiragraffi/olga/8/400/6_top_seller_1000x1000_8.jpg", 'Gioco per far sfogare i gatti di tutte le taglie', 'Normal'),
];

$foods = [
    new Food(new Category('Dog'), 345, 'Croccantini', 'Pet Biscuits', 15, false, "https://shop-cdn-m.mediazs.com/bilder/bosch/hpc/light/7/400/70122_pla_bosch_light_12_5kg_7.jpg", 1, 'pollo, verdure e riso', 'secchi'),
    new Food(new Category('Cat'), 245, 'Croccantini', 'Pet Crunch', 8, false, "https://shop-cdn-m.mediazs.com/bilder/cosma/nature/x/g/alimento/umido/per/gatti/4/400/60833_pla_cosma_nature_tunashrimps_70g_4.jpg", 0.5, 'Agnello, verdure e riso', 'Umido'),

];


$toys[0]->setImg("https://shop-cdn-m.mediazs.com/bilder/nylabone/dental/osso/gioco/per/cuccioli/9/400/186512_pla_interpet_nylabone_welpen_dental_kauknochen_1stck_hs_02_9.jpg");
$toys[1]->setImg("https://shop-cdn-m.mediazs.com/bilder/colonna/tiragraffi/olga/8/400/6_top_seller_1000x1000_8.jpg");




var_dump($toys);