<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Thank you for registering, $username!";

    // Include a logout button
    echo "<form action='logout.php' method='post'>";
    echo "<input type='submit' value='Logout'>";
    echo "</form>";
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit();
}
?>
