<?php

session_start();
require_once("class.user.php");
$login = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('index.php');
}

if(isset($_POST['btn-login']))
{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);
		
	if($login->doLogin($uname,$umail,$upass))
	{
		$login->redirect('index.php');
	}
	else
	{
		$error = "Incorrect Login Information";
	}	
}

?>


<?php include 'header.php'; ?>
    
    
    
    
    

<div class="container">
    <div class="loginForm">
  <center>
<h1>Rad2</h1>
<form method="post" id="login-form"> <!-- beginning of login form -->

<div id="error">
        <?php
			if(isset($error))
			{
				?>
                <div class="alert alert-danger">
                   <i class="fa fa-exclamation-triangle"></i> &nbsp; <?php echo $error; ?>
                </div>
                <?php
			}
		?>
  </div>

    
  <div>
    <input  value="Timon" type="text" id="exampleInputName2" name="txt_uname_email" placeholder="userID ">
  </div>
  <div>
    <input value="jjjjjj" type="password" id="exampleInputEmail2" name="txt_password" placeholder="Password ">
  </div>
  <button type="submit" class="btn btn-primary" name="btn-login">Login</button>
</form>
</center>
</div> <!-- end loginform -->
</div> <!-- end container -->




<?php include 'footer.php'; ?>





