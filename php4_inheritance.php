<?php
// inheritance
class father
{
    public $a;
    public $b;
   

    function getvalue($x,$y)
    {
        $this->a=$x;
        $this->b=$y;
    }

}

class son extends father
{
        function display()
        {
            echo "value of a : $this->a";
            echo "value of b : $this->b";
        }
}


$add=new son;
$add->getvalue(10,20);
$add->display();


?>