<?php

require_once __DIR__ . '/Category.php';
class product{

    public $category;
    public $id;
    public $name;
    public $brand;
    public $price;
    public $isAvaibale;
    public $img;
    protected $discount = 0;
    /**
     *  @var Array $category
     *  @var Float $id
     *  @var String $name
     *  @var String $brand
     *  @var String $img
     *  @var Bool $isAvaiable
     *  @var Float $price
     */
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

    // CREO LA FUNZIONE PER EVENTUALE SCONTO

    public function setDiscount(Int $_discount){
        if($_discount < 1 && $_discount > 99){
            $this->discount = 0;

        }else{
            $this->discount = $_discount;
        }
    }

    public function getDiscount(){
        return $this->discount;
    }

    public function getFinalPrice(){
        if($this->discount === 0){
            return $this->price;
        }

        return $this->price *= (1- ($this->discount/100));
    }

}

?>