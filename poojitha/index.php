<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html>
	<head>
	<title></title>
	</head>
	<body>
	<div>
	<form action="" method="POST">
	
	<input type="text" name="booktitle"placeholder="booktitle"><br><br>
	<input type="text" name="author"placeholder="author"><br><br>
	<input type="submit" name="submit" value="submit"><br><br>
	<button><a href="view.php">Display</a></button>
            </form>
        </div>
        <?php

        if (isset($_POST['submit'])) {
           
            $booktitle=$_POST['booktitle'];
            $author=$_POST['author'];
            $query="INSERT INTO details(booktitle,author) VALUES'$booktitle','$author')";
            $data=mysqli_query($con,$query);
        }
if($data)
 	 {
         ?>
         <script type="text/javascript">
            alert("Data Saved Successfully")
         </script>
         <?php
         }
         else
         {
            ?>
            <script type="text/javascript">
            alert("Please try again later")
         </script>
         <?php
         }
         ?>
    </body>
</html>