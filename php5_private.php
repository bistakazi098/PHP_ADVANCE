<?php
// private acess modifier

class student
{
    private $a="hellow";
    public function hellow()
    {
        echo $this->a;
    }
}
$b=new student;
$b->hellow();
?>