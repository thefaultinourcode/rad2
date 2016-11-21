<?php 
$link = mysqli_connect("localhost", "root", "mysql", "test") or die("Error connecting to database: ".mysql_error());

    $id = $_POST['pk'];
    $fname = $_POST['FNAME'];
    $lname = $_POST['LNAME'];
    $email = $_POST['EMAIL'];
    $password = $_POST['PASSWORD'];
    $userID = $_POST['USERID'];
    $status = $_POST['STATUS'];
    $email = mysqli_real_escape_string($link, $email);
    $sql = 'UPDATE users SET id="'.$id.'",f_name="'.$fname.'", l_name="'.$lname.'", email= "'.$email.'", userID="'.$userID.'", password="'.$password.'", status="'.$status.'" WHERE id="'.$id.'"';

    if (mysqli_query($link, $sql)) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . mysqli_error($link);
    }

    ?>