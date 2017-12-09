`<?php

  include('dbase.php');

  $b_name=$_POST['b_name'];
  $b_matricsID=$_POST['b_matricsID'];
  $b_password=$_POST['b_password'];
  $b_hpNum=$_POST['b_hpNum'];
  $b_location=$_POST['b_location'];
  $b_timeStart=$_POST['b_timeStart'];
  $b_timeEnd=$_POST['b_timeEnd'];

$fileinfo=PATHINFO($_FILES['photo']['name']);

  if(empty($fileinfo['filename'])){
    $location="";
  }
  else{
  $newFilename=$fileinfo['filename'] . "." . $fileinfo['extension'];
  move_uploaded_file($_FILES["photo"]["tmp_name"],"images/foodonsale/" . $newFilename);
  $location="images/foodonsale/" . $newFilename;

 
  }
 $query = "INSERT into bis_info (f_name,f_photo,f_price) VALUES( '$b_name', '$b_matricsID', '$b_password', '$b_hpNum', '$b_location', '$b_timeStart', '$b_timeEnd')";
  $result = mysqli_query($conn,$query) or die ("Could not execute query");

if($result){
  $query = "SELECT bis_id FROM bis_info ORDER BY bis_id DESC LIMIT 1";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        $bis_id = $row["food_id"];
  $query="SELECT bis_id FROM bus_info WHERE business name='just eat'"; 
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        $bis_id = $row["bis_id"];
        

    
  $query ="INSERT into business_food_mapping (business_fk) VALUES('$bis_id')";
  $result = mysqli_query($conn,$query) or die ("Could not execute query");
  echo "<script type= 'text/javascript'> window.location='bis_view_foodonsale.php'</script>";
}



?>
 