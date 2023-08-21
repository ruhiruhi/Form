<?php
$hostname="localhot";
$username="root";
$password="";
$dbname="dbc";

$conn=mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn){
    die("Connection failed");
}else{
    echo "Connected successfully!";
}



?>