<?php

// protected acess modifier

class teacher
{
    protected $a;
    public function display($b)

    {
     echo $this->a=$b;
    }

}

class student extends teacher
{
    function display1()
    {
        echo "teacher variable", $this->a;
    }
}

$s= new student;
$s->display1();
$s->display(1234);
?>