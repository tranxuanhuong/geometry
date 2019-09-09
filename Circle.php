<?php


class Circle
{
    public $radius;
    public $color;

    public function __construct($radius,$color)
    {
        $this->radius=$radius;
        $this->color=$color;

    }

    public function calculateArea(){

        return pi()*pow($this->radius,2);
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    public function toString(){

        echo "Radius".$this->getRadius()."<br>";
        echo "Color".$this->getColor()."<br>";
        echo "Dien tich".$this->calculateArea();
    }


}