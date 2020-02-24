<?php

session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

$_SESSION["name"] = $_POST["name"];
echo "<br>";

echo $_SESSION["name"];

echo "<br>";

$_SESSION["email"] = $_POST["email"];

echo "<br>";
echo $_SESSION["email"];

echo "<br>";
$_SESSION["gender"] = $_POST["gender"];
echo "<br>";

echo $_SESSION["gender"];
echo "<br>";

$_SESSION["password"] = $_POST["password"];
echo "<br>";

echo $_SESSION["password"];
echo "<br>";
?>


<html>
   <body>
      
      <form action="from3.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html>







</body>
</html>