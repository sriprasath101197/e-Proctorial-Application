<?php
$host='localhost';
$user='root';
$pass='';
$db='test';

$con=mysqli_connect('localhost',$user,$pass,$db) or die("not connected");

$name=$_GET['nm'];
$passwor=$_GET['psw'];



$sql="update login set password='$passwor' where username='$name'";

$query=mysqli_query($con,$sql);


?>