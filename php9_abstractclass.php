<?php
// abstract class 
abstract class student
{
    abstract function display($x);
}

class teacher extends student
{
    function display($x)
    {
        echo $x;
    }
}

$b=new teacher ;
$b->display("hellowworld");
?>