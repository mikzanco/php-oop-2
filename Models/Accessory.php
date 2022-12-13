<?php

require_once __DIR__ . '/Product.php';
class Accessory extends Product{
    public $material;
    public $size;
    /**
     * @var String $material
     * @var String $size
     */
    public function __construct(Category $_category, $_id, $_name, $_brand, $_price, $_isAvaiable, $_img, $_material, $_size,)
    {
        parent::__construct($_category, $_id, $_name, $_brand, $_category, $_price, $_isAvaiable, $_img);

        $this->material = $_material;
        $this->size = $_size;

    }
}