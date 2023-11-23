<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms get</title>
</head>
<body bgcolor="red">
<center><br><br><br><br><br>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['fname'];
    $lastname = $_POST['lname'];
    
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "poo";

 
  $con = mysqli_connect($servername, $username, $password, $database);

  if (!$con) {
      die("Sorry, we failed to connect: " . mysqli_connect_error());
  } else {
      echo "Connection was successful";
  }

 
  $sql = "INSERT INTO stu(sno, fname, lname, dt) VALUES ('5', '$name', '$lastname', current_timestamp());";

  
  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "Data inserted successfully";

  } else {
    echo "Data not inserted successfully";
  }
}
?>
<form action="/basic/rama.php" method="post">

  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" ><br>


  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" ><br><br>

  <input type="submit" value="REGISTER">
  <a href="welcome.html">NEXT</a>
</form> 
</body>
</html>