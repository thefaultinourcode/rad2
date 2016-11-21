<?php
	session_start();
$link = mysqli_connect("localhost", "root", "mysql", "test") or die("Error connecting to database: ".mysql_error());
$name = $_POST['username'];
$pass = $_POST['password'];
$query = mysqli_query($link, 'SELECT * FROM users WHERE userID = "'.$name.'"');

if (mysqli_num_rows($query) == 1) {
	header("Location: index.php");
	}

	else { 
		echo ": username and/or password is incorrect. Please try again."; 
	}

	/*if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
		header("Location: success.php");
	}

	if (isset($_POST['username']) && isset($_POST['password'])) {
		if ($_POST['username'] == $username && $_POST['password'] == $password)
{
			$_SESSION['logged_in'] = true;
			header("Location: success.php");
		}
	}*/
?>

<html>
	<body>
		<form method="post" action="login.php">
			Username:<br/>
			<input type="text" name="username"><br/>
			Password</br/>
			<input type="password" name="password"><br/>
			<input type="submit" value="Login">
		</form>
	</body>
</html>