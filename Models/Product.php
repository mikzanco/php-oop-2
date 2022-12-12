<?php

class product{

    public $id;
    public $name;
    public $brand;
    public $category;
    public $price;
    public $isAvaibale;
    public $image;

    public function __construct($_id, $_name, $_brand, $_category, $_price, $_isAvaiable, $_image)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->category = $_category;
        $this->price = $_price;
        $this->isAvaibale = $_isAvaiable;
        $this->image = $_image;
    }

}

?>