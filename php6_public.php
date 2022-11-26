<?php
// public acess modifier 

class student 
{
public $a;
public function  display($x)
{
  echo  $this->a=$x;
}

}
$b=new student;
$b->display(100);

?>