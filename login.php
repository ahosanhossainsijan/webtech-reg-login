<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connectuion failed: " . $conn->connect_error);
}
$email=$_POST['email'];
$password=$_POST['password'];
$sql="selcet * from Reg_Info where Email='$email' && password='$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result)
if($row.["password"] == $password)
{
  header("Location:welcome.php");
 
}
else
{
	echo "sorry";
}
   
   
    
$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	<label>Email</label>
	<input type="text" name="email"><br><br>
	<label>Password</label>
	<input type="password" name="pass"><br><br><br>
	<input type="submit" name="Sign In">
</form>
</body>
</html>

