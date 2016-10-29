<?php 
include 'header.php';
$link = mysqli_connect("localhost", "root", "mysql", "test") or die("Error connecting to database: ".mysql_error());

if ($_POST['action'] == 'Edit') {

    $id = $_POST['pk'];
    

    $query = mysqli_query($link, "SELECT * FROM users WHERE (`id` = '".$id."')")  or die(mysqli_error($link));
    $formval = mysqli_fetch_array($query);
    $id = $formval['id'];
    $fname = $formval['f_name'];
    $lname = $formval['l_name'];
    $email = $formval['email'];
    $password = $formval['password'];
    $userID = $formval['userID'];
    $status = $formval['status'];
          
          

echo '
<style>
.form-control{
width: 50%;
}

.col-xs-2{
padding-right: 2px;
width: 9.666667%;
}

.col-xs-10{
padding-left:0px;
}
</style>
<div class="editContainer">

<div class="container">
   <body>
   
   
   
 <form method="post">
<input id="BUTTON"type="button" value="Save" class="submit" />

<input type="hidden" name="pk" value="'.$id.'"/>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label"> User D</label>
  <div class="col-xs-10">
    <input name="USERID" class="form-control" type="text" value="'.$userID.'" id="example-text-input"/>
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-form-label">First Name</label>
  <div class="col-xs-10">
    <input name="FNAME" class="form-control" type="text" value="'.$fname.'" id="example-search-input"/>
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-xs-2 col-form-label">Last Name</label>
  <div class="col-xs-10">
    <input name="LNAME" class="form-control" type="text" value="'.$lname.'" id="example-email-input"/>
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-xs-2 col-form-label">Email</label>
  <div class="col-xs-10">
    <input name="EMAIL" class="form-control" type="email" value="'.$email.'" id="example-url-input"/>
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-xs-2 col-form-label">Title</label>
  <div class="col-xs-10">
    <input name="TITLE" class="form-control" type="text" value="Mr" id="example-tel-input"/>
  </div>
</div>
<div class="form-group row">
  <label for="example-password-input" class="col-xs-2 col-form-label">Password</label>
  <div class="col-xs-10">
    <input name="PASSWORD" class="form-control" type="text" value="'.$password.'" id="example-password-input"/>
  </div>
</div>
<div class="form-group row">
  <label for="example-number-input" class="col-xs-2 col-form-label">User Type</label>
  <div class="col-xs-10">
    <input name="USERTYPE" class="form-control" type="text" value="42" id="example-number-input"/>
  </div>
</div>
<div class="form-group row">
  <label for="example-password-input" class="col-xs-2 col-form-label">VPN Profile</label>
  <div class="col-xs-10">
    <input name="VPN" class="form-control" type="text" value="Default" id="example-password-input"/>
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label"> Status</label>
  <div class="col-xs-10">
    <input name="STATUS" class="form-control" type="text" value="'.$status.'" id="example-text-input"/>
  </div>


    </form>

	</div> <!-- Container end -->
    </div> <!-- end editContainer -->';
    
}
else{
    header("Location: index.php");
}

 
 
 include 'footer.php'; ?>
