<?php
// mysqli connecction 

$conn=mysqli_connect("localhost","root","","test_db");
if($conn)
{
    echo "sucessfull";
    
}

else{
    echo "unsucessful";
}

?>