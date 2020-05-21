<!DOCTYPE>
<html>
<head>

<script>
function fun()
{
alert("this page is loading");
}
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
.right
{
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
<?php
// define variables and set to empty values
$nameErr = $emailErr =$nameErrs = $websiteErr = $depErr=$unameErrs= $passnameErrs=$noErrs=$no1Errs="";
$no1 =$no =$passname =$uname =$lname =$name = $email =$dep=$deperr =$fname ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $nameErr = "Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["lname"])) {
    $nameErrs = "last Name is required";
  } else {
    $lname = test_input($_POST["lname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $nameErrs = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["dep"])) {
    $deperr = "Department is required";
  } else {
    $dep = test_input($_POST["dep"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$dep)) {
      $deperr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["uname"])) {
    $unameErr = "user Name is required";
  } else {
    $uname = test_input($_POST["uname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$uname)) {
      $unameErrs = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["passname"])) {
    $passnameErr = "last Name is required";
  } else {
    $passname = test_input($_POST["passname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$passname)) {
      $passnameErrs = "Only letters and white space allowed";
    }
  }

  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["no"])) {
    $noErrs = "phone no. is required";
  } else {
    $no = test_input($_POST["no"]);
    // check if e-mail address is well-formed
    if (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/',$no)) {
      $noErrs = "Invalid number format";
    }
  }

    
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<script>
function myfun()
{

alert("Re-enter the invalid data");

}
</script>

<div class="right">

<p onmouseover=style.color="green">Create Account</p>

<p><span class="error"># required.</span></p>
<form onsubmit="myfun()"; method="post" action="pro_sign_up_db.php">  

  First Name: <input type="text" name="fname" value="<?php echo $fname;?>">
  <span class="error"># <?php echo $nameErr;?></span>

 Last Name: <input type="text" name="lname" value="<?php echo $lname;?>">
  <span class="error"> <?php echo $nameErrs;?></span>

  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error"># <?php echo $emailErr;?></span>
  <br>
  Department <input type="text" name="dep" value="<?php echo $dep;?>">
  <span class="error"><?php echo $depErr;?></span>
  <br>
 User Name: <input type="text" name="uname">
  <br>
 Password : <input type="text" name="passname">
  <br>  
  
 Phone no : <input type="number" name="no" value="<?php echo $no;?>">
  <span class="error"> <?php echo $noErrs;?></span>
  <br>
 Age : <input type="number" name="no1" value="<?php echo $no1;?>">
  <span class="error"> <?php echo $no1Errs;?></span>
  <br>

<input type="submit" value="Create Account" name="sub"><br>


</form>
</div>


</body>
</html>
