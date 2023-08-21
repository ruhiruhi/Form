<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$city=$_POST["city"];
$msg=$_POST["msg"];

$conn=new mysqli("localhost","root","","dbc");
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO tblc (fname,lname,email,phone,city,msg) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiss",$fname,$lname,$email,$phone,$city,$msg);
    $stmt->execute();
    $stmt->close();
    echo "Connection successfull!";
    $conn->close();
}




?>