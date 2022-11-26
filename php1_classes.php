<?php
// classes in php 
class car
{
    var $model;

function carnumber($num1)
{
    //global $model;//
    //$model=$num1;
    $this->model=$num1;
    echo "the number of car is" ,$this->model;

}
}

// creating a object 

$f1= new car;
$f1->carnumber("1234");




?>