<?php

class product{

    public $category;
    public $id;
    public $name;
    public $brand;
    public $price;
    public $isAvaibale;
    public $img;

    public function __construct(Category $_category, $_id, $_name, $_brand, $_price, $_isAvaiable)
    {
        $this->category = $_category;
        $this->id = $_id;
        $this->name = $_name;
        $this->brand = $_brand;
        
        $this->price = $_price;
        $this->isAvaibale = $_isAvaiable;
    }

    public function setImg($_img){
        $this->img = $_img;
    }

    public function getImg(){

        $placeholder = 'https://t4.ftcdn.net/jpg/05/07/58/41/360_F_507584110_KNIfe7d3hUAEpraq10J7MCPmtny8EH7A.jpg';

        if($this->img){
            return $this->img;
        }
        return $placeholder;
    }

}

?>