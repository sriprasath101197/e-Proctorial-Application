<?php
$host='localhost';
$user='root';
$pass='';
$db='test';

$con=mysqli_connect('localhost',$user,$pass,$db) or die("not connected");

$u=$_GET['uname'];
$a=$_GET['passname'];
$sql2="select password from login where username='$u'";     

$result=mysqli_query($con,$sql2);

$rows=mysqli_fetch_array($result);

$b=strcmp($a,$rows['password']);

if($b==0)
{
echo "You have successfully logged into the website";
}

?>