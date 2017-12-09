<?php

  include('dbase.php');

  $foodname=$_POST['foodname'];
  $price=$_POST['price'];
  $id=$_POST['id'];

$fileinfo=PATHINFO($_FILES['photo']['name']);

  if(empty($fileinfo['filename'])){
    $location="";
  }
  else{
  $newFilename=$fileinfo['filename'] . "." . $fileinfo['extension'];
  move_uploaded_file($_FILES["photo"]["tmp_name"],"images/foodonsale/" . $newFilename);
  $location="images/foodonsale/" . $newFilename;

 
  }
 $query = "INSERT into food_info (f_name,f_photo,f_price) VALUES('$foodname', '$location', $price)";
  $result = mysqli_query($conn,$query) or die ("Could not execute query");

if($result){
  $query = "SELECT food_id FROM food_info ORDER BY food_id DESC LIMIT 1";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        $food_id = $row["food_id"];
  $query= "SELECT business_id FROM business_info WHERE business_id='$id'"; 
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        $business_id = $row["business_id"];
        

    
  $query = "INSERT into business_food_mapping (business_fk,food_fk) VALUES('$business_id', '$food_id')";
  $result = mysqli_query($conn,$query) or die ("Could not execute ery");
  echo "<script type= 'text/javascript'> window.location='bis_view_foodonsale.php'</script>";
}



?>