<?php


class Toy extends Product{
    public $feature;
    public $size;

    public function __construct(Category $_category, $_id, $_name, $_brand, $_price, $_isAvaiable, $_image, $_feature, $_size)
    {
        parent::__construct($_category, $_id, $_name, $_brand, $_category, $_price, $_isAvaiable, $_image);

        $this->feature = $_feature;
        $this->size = $_size;

    }
}