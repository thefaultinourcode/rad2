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
          
switch ($status) {
    case 'Deleted':
        $option= '<select name="STATUS">
  <option selected value="Deleted">Deleted</option>
  <option value="Un-Deleted">Un-Deleted</option>
  <option value="Not Active">Not Active</option>
  <option value="Active">Active</option>
</select>';
        break;
    case 'Un-Deleted':
        $option= '<select name="STATUS">
  <option value="Deleted">Deleted</option>
  <option selected value="Un-Deleted">Un-Deleted</option>
  <option value="Not Active">Not Active</option>
  <option value="Active">Active</option>
</select>';
        break;
    case 'Not Active':
        $option= '<select name="STATUS">
  <option value="Deleted">Deleted</option>
  <option value="Un-Deleted">Un-Deleted</option>
  <option selected value="Not Active">Not Active</option>
  <option value="Active">Active</option>
</select>';
        break;
    case 'Active':
        $option= '<select name="STATUS">
  <option value="Deleted">Deleted</option>
  <option value="Un-Deleted">Un-Deleted</option>
  <option value="Not Active">Not Active</option>
  <option selected value="Active">Active</option>
</select>';
        break;
    default:
        $option= '<select name="STATUS">
  <option value="Deleted">Deleted</option>
  <option value="Un-Deleted">Un-Deleted</option>
  <option value="Not Active">Not Active</option>
  <option selected value="Active">Active</option>
</select>';
      }


echo'
          
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

   <body>
   


<div class="container editControl">

<center>
<h1> Edit '.$fname.'\'s Information </h1>
</center>

 <form id="form">
<input type="hidden" name="pk" value="'.$id.'">

<div class="row">
  <div class="col-md-6 editInput">
    <span class="fa fa-user fa-2x"></span>
    <input name="FNAME"  type="text" value="'.$fname.'" placeholder="First Name">
  </div> <!--end col-md-6 -->

  <div class="col-md-6 editInput">
        <span class="fa fa-user fa-2x"></span>
    <input name="LNAME"  type="text" value="'.$lname.'">
  </div>  <!--end col-md-6 -->
</div><!-- end row -->



<div class="row">
  <div class="col-md-6 editInput">
        <span class="fa fa-grav fa-2x" aria-hidden="true"></span>
    <input name="USERID"  type="text" value="'.$userID.'">
  </div> <!--end col-md-6 -->

  <div class="col-md-6 editInput">
        <span class="fa fa-key fa-2x" aria-hidden="true"></span>
    <input name="PASSWORD"  type="text" value="'.$password.'">
  </div>  <!--end col-md-6 -->
</div><!-- end row -->



<div class="row">
  <div class="col-md-6 editInput">
          <span class="fa fa-envelope-o fa-2x" aria-hidden="true"></span>
          <input name="EMAIL"  type="email" value="'.$email.'">
    </div>  <!--end col-md-6 -->

  <div class="col-md-6 editInput">
        <span class="fa fa-caret-square-o-up fa-2x" aria-hidden="true"></span>
    <input name="USERTYPE" placeholder="User Type" type="text">
  </div>  <!--end col-md-6 -->
</div><!-- end row -->




<div class="row">
  <div class="col-md-6 editInput">
          <span class="fa fa-venus-mars fa-2x" aria-hidden="true"></span>
    <input name="TITLE"  type="text" value="" placeholder="Title">
  </div>

  <div class="col-md-6 editInput">
            <span class="fa fa-sitemap fa-2x" aria-hidden="true"></span>
    <input name="VPN" placeholder="VPN Profile" type="text">
  </div>  <!--end col-md-6 -->
</div><!-- end row -->




<div class="row">
  <div class="col-md-3 editInput">
    '.$option.'
  </div>

  <div class="col-md-9 editInput">
    <button type="button" id="editSaveButton">Save</button>
  </div>  <!--end col-md-9 -->
</div><!-- end row -->


    </form>
	</div> <!-- Container end -->';
    
 
}
/*
else{
    header("Location: index.php");
}
*/
 
 
 include 'footer.php'; ?>


