<?php
// static keyword 

class teacher 
{
public static $a="static function";
static function display()
{
   echo  self::$a;
}  


}
teacher::display();
?>