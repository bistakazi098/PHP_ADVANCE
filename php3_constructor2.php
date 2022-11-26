<?php
// parametrized constructor 

class student
{
    var $roll;
    function __construct($num)
    {
        $this->roll=$num;
        echo"the roll number of ram is ",$this->roll;

    }

    function __destruct()
    {
         echo "destructer calling";
    }


}
$stu =new student(10);
?>