<?php
// interface 


interface inter{
    const a =1;
    public function display();

}


class student implements inter
{
   
    function display()
    {
        echo "hellow world";
    }
}
$s=new student;
$s->display();
?>