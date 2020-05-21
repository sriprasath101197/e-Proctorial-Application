<!DOCTYPE>
<html>
<head>

<script>
function fun()
{
alert("this page is loading");
}
function func()
</script>
</head>
</head>
<style>
.error {color: #FF0000;}
div
{
color:white;
font-family:"Times new roman";
font-size:20px;
}
body
{ 
background-image:url("down.jpg");
}
ul {
    list-style-type: none;
    margin: 0;
    padding:0;
    overflow: hidden;
    background-color: black;
}

li {
    float: left;
    border-right:1px solid white;
}

li:last-child {
    border-right: green;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

input[type=text] {
    
    padding: 8px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid violet;
}

p
{
font-size:40px;

}
div.cities {
    background-color: black;
    color: white;
    margin: 20px 0 20px 0;
    padding: 5px;
width:70%;
} 
</style>
 
</head>
<body onload="fun()">
<?php
$passvalue="";
?>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
<li><a href="#login">Login</a></li>  
<li style="float:right"><a href="#about">About</a></li>
</ul>


<form method="get" action="project3.php">

  <font color="yellow" size="5">UserName: </font><input type="text" name="uname" maxlength="15">
  <br>
 <font color="yellow" size="5">Password : </font><input type="text" name="passname" onmouseover="func()" maxlength="15" value="<?php $passvalue ?>">
  <br>


<input type="submit" value="Refresh" name="sub" style="margin-left:110px " >

<input type="submit" value="Login" formaction="db5.php" style="margin-left: 60px "><br><br>

<a href="pro.php" style="margin-left:110px; color:yellow; ">Change Password</a><br>

<a href="pro1.php" style="margin-left:110px; color:yellow;">Remove Account</a>

</form>

<?php    
session_start();
?>


<script>
function func()
{
var a="<?php
  $cookie_name =$_GET['uname'];
  $cookie_value =$_GET['passname'];

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 

if(isset($_COOKIE[$cookie_name])) 
{
    $passvalue=$_COOKIE[$cookie_name];
} 
else
{
echo "error";
}
?>";
alert("<?php

$count=$_SESSION["a"];
$count++;
$_SESSION["a"]=$count;

echo "The number of times you have visited this site is " .$_SESSION["a"] ;

?>");

}
</script>



</body>
<html>