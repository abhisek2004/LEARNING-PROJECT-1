<?php

$hostname="localhost";
$username="root";
$password="";
$dbname="Social";

$conn=mysqli_connect($hostname,$username,$password,$dbname);

if(!$conn){
    die("Can't connect to the db");
}


?>