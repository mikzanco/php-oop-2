<?php

require_once __DIR__ . '/Product.php';
class Toy extends Product{
    public $feature;
    public $size;

    /**
     * @var String $feature
     * @var String $size
     */
    public function __construct(Category $_category, $_id, $_name, $_brand, $_price, $_isAvaiable, $_img, $_feature, $_size)
    {
        parent::__construct($_category, $_id, $_name, $_brand, $_category, $_price, $_isAvaiable, $_img);

        $this->feature = $_feature;
        $this->size = $_size;

    }
}