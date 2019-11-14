<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username ==("admin") & $password==("Oilers17")){
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
  header("location:admin.php");
  exit();
}
else echo "<p> Something Went Wrong </p>";

?>