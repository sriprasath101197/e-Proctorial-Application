<!DOCTYPE>
<html>
<head>

<script>
}
function fun()
{
alert("this page is loading");
}
}
</script>
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
div.right
{
   float: right;
    width: 300px;
    padding: 10px;
}
input[type=text] {
    width: 100%;
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
a
{
color:00bfff;
}
</style>
 
</head>
<body>


<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
<li><a href="#login">Login</a></li>  
<li style="float:right"><a href="#about">About</a></li>
</ul>



<p>
<div class="right">


<h2><b><a href="pro_sign_up.php" >Sign up</a></b></h2>
 
<h2><b><a href="pro_login.php">Login</a></b></h2>



</div>
</p>


<div class="cities">
<h2>e-PrOcToRiAl</h2>
<p>An application especially to teacher. They can track their proctor student easily and in an effective manner. Interaction between students and staff gets developed.....Hence it's time to make the application.</p>
</div>

</body>
</html>
    