<?php
$server="localhost";
$username="root";
$password="";
$database="finalproject";

$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    echo mysqlie_error()."error";
}



?>