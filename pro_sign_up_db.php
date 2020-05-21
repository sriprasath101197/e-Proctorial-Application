<?php
$host='localhost';
$user='root';
$pass='';
$db='test';
  
$name=$_POST['uname'];
$passw=$_POST['passname'];



$con=mysqli_connect('localhost',$user,$pass,$db) or die("not connected");


$sql="insert into login(username,password) values ('$name','$passw')";
$query=mysqli_query($con,$sql);


?>