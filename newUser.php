<?php

$link = mysqli_connect("localhost", "root", "mysql", "test") or die("Error connecting to database: ".mysql_error());
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$user = $_POST['userID'];

echo $fname;

$query = mysqli_query($link, 'INSERT into users ($fname, $lname, $email, $user, $pass)');
?>

<form method = "post" action = "newUser.php">
<input type = "text" name = "fname"> 
<input type = "text" name = "lname"> 
<input type = "text" name = "password"> 
<input type = "text" name = "email"> 
<input type = "text" name = "userID"> 
<button type = "submit">Save</button>
</form>