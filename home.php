<?php
include("connection.php");
include('session.php');
if (!customerLoggedin()) {
  header("location: login.php");
}

 echo $_SESSION['customer_email'];


?>

<h1>click here to <a href="logout.php">logout</a></h1>