<?php


class Food extends Product{
    public $weight;
    public $ingredients;
    public $taste;

    public function __construct(Category $_category, $_id, $_name, $_brand, $_price, $_isAvaiable, $_img, $_weight, $_ingredients, $_taste)
    {
        parent::__construct($_category, $_id, $_name, $_brand, $_category, $_price, $_isAvaiable, $_img);

        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
        $this->taste = $_taste;

    }
}