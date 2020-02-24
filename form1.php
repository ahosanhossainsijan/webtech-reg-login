<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  



<?php
$nameErr = $emailErr = $genderErr = $passwordErr="";
$name = $email = $gender= $password= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"]))
  {
    $nameErr = "Name is required";
  }
  else
  {
    $name = $_POST["name"];
  }
  
  if (empty($_POST["email"]))
  {
    $emailErr = "Email is required";
  }
  else
  {
    $email = $_POST["email"];
  } 
    if (empty($_POST["gender"]))
  {
    $genderErr = "Gender is required";
  }
  else 
  {
    $gender = $_POST["gender"];
  }


  if (empty($_POST["password"]))
  {
    $nameErr = "Password is required";
  }
  else
  {
    $password = $_POST["password"];
  }

}


?>

<h2>My Form </h2>
<p><span class="error">*Please fill up the form</span></p>
<form method="post" action="form2.php">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="email" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
<br><br>

  Password: <input type="text" name="password">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  
  
  <input type="submit" name="submit" value="Submit"> 
  <a href="login.php"> Already Registared</a>
</form>








</body>
</html>

