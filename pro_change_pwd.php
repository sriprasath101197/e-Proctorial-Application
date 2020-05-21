<!DOCTYPE>
<html>
<head>

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
.right
{
   float: right;
    width: 300px;
    sss
    padding: 10px;
}
.center
{
float:center;
}

</style>
 
</head>
<body onload="fun()">

<div class="center">
<form method="get" action="pro_change_pwd_db.php">
<center><font color="cyan">Enter the username:</font>                   <input type="text" name="uname" >
<br><br>

<font color="cyan">Enter current password:</font><input type="text" name="pname" >
<br><br>

<font color="cyan">Enter new password          :</font><input type="text" name="nname" >
<br><br>

<font color="cyan">confirm new password        :</font><input type="text" name="cname" >
<br>
<br>
 <input type="submit" name="submit" value="Change Password" > </center>
</form>
</div>
</body>
</html>