<?php

class Category{
    public $name;
    public $icon;
    /**
     * @var String $name
     * @var String $icon
     */
    public function __construct($_name, $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }

    // fare in modo più astratto.

    // public function setIcon(){
    //     if($this->name === 'Dog'){
    //         $this->icon = "https://image.shutterstock.com/image-vector/pet-dog-line-icon-outline-260nw-529796020.jpg";
    //     }elseif($this->name === 'Cat'){
    //         $this->icon = "https://image.shutterstock.com/image-vector/cat-line-icon-outline-vector-260nw-726803200.jpg";
    //     }
    // }
}