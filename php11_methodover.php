<?php
// method overriding 
class ram
{
    function display2()
    {
    echo "hellow i am ram";

}
}

class sam
{
   final function display()
//    with final keyword we cannot inheriate 
    {
        echo "hellow i am sam";
    }
}

class hari
{
    function display1()
    {
        echo "hellow i am hari";
    }
}
$a=new sam;
$a->display();
?>