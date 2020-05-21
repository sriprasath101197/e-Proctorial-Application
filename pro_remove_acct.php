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
    
    padding: 10px;
}

</style>
 
</head>
<body onload="fun()">
<form method="get" action="pro_remove_acct_db.php">
<font color="cyan">Enter the username</font><input type="text" name="nm" >
<br>

<font color="cyan">Enter the password :</font><input type="text" name="psw" >
<br>
<br>
 <input type="submit" name="submit" value="Remove Account" > 
</form>
</body>
</html>