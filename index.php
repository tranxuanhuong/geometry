<?php

include_once "Circle.php";
include_once "Cylinder.php";

$circle=new Circle(5,"yellow");
echo "circle";
$circle->toString();

$cylinder=new Cylinder(5,"red",4);
echo "cylinder";
$cylinder->toString();
