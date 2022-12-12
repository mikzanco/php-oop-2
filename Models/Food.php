<?php


class Food extends Product{
    public $weight;
    public $ingredients;
    public $taste;

    public function __construct($_id, $_name, $_brand, $_category, $_price, $_isAvaiable, $_image, $_weight, $_ingredients, $_taste)
    {
        parent::__construct($_id, $_name, $_brand, $_category, $_price, $_isAvaiable, $_image);

        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
        $this->taste = $_taste;

    }
}