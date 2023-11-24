<!DOCTYPE html>
<html>
<head>
    <title>forms get</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "poojitha";

 
  $con = mysqli_connect($servername, $username, $password, $database);

  if (!$con) {  
      die("Sorry, we failed to connect: " . mysqli_connect_error());
  } else {
      echo "Connection was successful";
  }

 
  $sql = "INSERT INTO Student(sno, Username, Password, dt) VALUES ('1', '$Username', '$Password', current_timestamp());";

  
  $result = mysqli_query($con, $sql);
  if ($result) {
    echo "Data inserted successfully";

  } else {
    echo "Data not inserted successfully";
  }
}
?>
<form action="saveetha.php" method="post">
<style>
body { background-color:pink;}
</style> 
  Username:<input type="text" id="Username" name="Username" ><br><br>
  Password:<input type="text" id="Password" name="Password" ><br><br>
  <input type="submit" value="submit">
  <a href="welcome.php">continue</a>
</form> 
</body>
</html>