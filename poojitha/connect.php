<?php
$host="localhost";
$user="root";
$pass="";
$db="book2";

$con=mysqli_connect($host,$user,$pass,$db);

if($con){
  echo"ok";
}
else{
  echo"db not connected";
}
?>