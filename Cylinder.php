<?php
include_once "Circle.php";

class Cylinder extends Circle
{
    public $height;

    public function __construct($radius, $color,$height)
    {
        parent::__construct($radius, $color);
        $this->height=$height;
    }

    public function calculateVolume(){

        return parent::calculateArea()*2*$this->height;
    }

    public function toString()
    {
        echo "The tich ".$this->calculateVolume();
    }

}