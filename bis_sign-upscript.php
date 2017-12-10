<?php

  include('dbase.php');

  $b_name=$_POST['bisnes_name'];
  $b_matricsID=$_POST['sellermatric'];
  $b_password=$_POST['password'];
  $b_hpNum=$_POST['hpNum'];
  $b_location=$_POST['location'];
  $b_timeStart=$_POST['start_time'];
  $b_timeEnd=$_POST['end_time'];

$fileinfo=PATHINFO($_FILES['photo']['name']);

  if(empty($fileinfo['filename'])){
    $location="";
  }
  else{
  $newFilename=$fileinfo['filename'] . "." . $fileinfo['extension'];
  move_uploaded_file($_FILES["photo"]["tmp_name"],"images/businessprofile/" . $newFilename);
  $location="images/businessprofile/" . $newFilename;

 
  }
 $query = "INSERT into business_info (b_name, b_matricID, b_password, b_hpNum, b_location, b_timeStart, b_timeEnd, b_photo) VALUES( '$b_name', '$b_matricsID', '$b_password', '$b_hpNum', '$b_location', '$b_timeStart', '$b_timeEnd', '$location')";
  $result = mysqli_query($conn,$query) or die ("Could not execute query");

if($result){

  echo "<script type= 'text/javascript'> window.location='login.php?status=signupsuccessfull'</script>";
}



?>
 