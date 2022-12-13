<?php


require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Category.php';
require_once __DIR__ . '/../Models/Accessory.php';
require_once __DIR__ . '/../Models/Food.php';
require_once __DIR__ . '/../Models/Toy.php';


$categories = [
    'cane' => new Category('Cane', "https://image.shutterstock.com/image-vector/pet-dog-line-icon-outline-260nw-529796020.jpg" ),
    'gatto' => new Category('Gatto', 'https://image.shutterstock.com/image-vector/cat-line-icon-outline-vector-260nw-726803200.jpg'),
];

$toys = [
    new Toy($categories['cane'], 445, 'Osso', 'Ossi Osso', 3, true, "https://shop-cdn-m.mediazs.com/bilder/nylabone/dental/osso/gioco/per/cuccioli/9/400/186512_pla_interpet_nylabone_welpen_dental_kauknochen_1stck_hs_02_9.jpg", 'Oggetto gommoso per i denti del vostro cane', 'small'),
    new Toy($categories['gatto'], 732, 'Tira graffi', 'GiocaGatto', 34, true, "https://shop-cdn-m.mediazs.com/bilder/colonna/tiragraffi/olga/8/400/6_top_seller_1000x1000_8.jpg", 'Gioco per far sfogare i gatti di tutte le taglie', 'Normal'),
];

$foods = [
    new Food($categories['cane'], 345, 'Croccantini', 'Pet Biscuits', 15, false, "https://shop-cdn-m.mediazs.com/bilder/bosch/hpc/light/7/400/70122_pla_bosch_light_12_5kg_7.jpg", 1, 'pollo, verdure e riso', 'secchi'),
    new Food($categories['gatto'], 245, 'Croccantini', 'Pet Crunch', 8, false, "https://shop-cdn-m.mediazs.com/bilder/cosma/nature/x/g/alimento/umido/per/gatti/4/400/60833_pla_cosma_nature_tunashrimps_70g_4.jpg", 0.5, 'Agnello, verdure e riso', 'Umido'),

];

$accessories = [
    new Accessory($categories['cane'], 1202, 'Cuccia', 'All For Pets', 320, false, "https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/classic/1/400/icon_topseller_1_56__1.jpg", 'Wood', 'big' ),
    new Accessory($categories['gatto'], 1702, 'Cuccia tiragraffi', 'All For Pets', 120, true, "https://media.mediazs.com/bilder/5/140/115905_pla_modern_living_kb_amora_fg_4024_5.jpg", 'Wood tessuto', 'medium' ),

];


$toys[0]->setImg("https://shop-cdn-m.mediazs.com/bilder/nylabone/dental/osso/gioco/per/cuccioli/9/400/186512_pla_interpet_nylabone_welpen_dental_kauknochen_1stck_hs_02_9.jpg");
$toys[1]->setImg("https://shop-cdn-m.mediazs.com/bilder/colonna/tiragraffi/olga/8/400/6_top_seller_1000x1000_8.jpg");

$foods[0]->setImg("https://shop-cdn-m.mediazs.com/bilder/bosch/hpc/light/7/400/70122_pla_bosch_light_12_5kg_7.jpg");
$foods[1]->setImg("https://shop-cdn-m.mediazs.com/bilder/cosma/nature/x/g/alimento/umido/per/gatti/4/400/60833_pla_cosma_nature_tunashrimps_70g_4.jpg");

$accessories[0]->setImg("https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/classic/1/400/icon_topseller_1_56__1.jpg");
$accessories[1]->setImg("https://media.mediazs.com/bilder/5/140/115905_pla_modern_living_kb_amora_fg_4024_5.jpg");



// var_dump($toys);