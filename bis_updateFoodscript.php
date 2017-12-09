/<?php

  include('dbase.php');
  $id= $_POST['id'];
  $foodname=$_POST['foodname'];
  $price=$_POST['price'];

$fileinfo=PATHINFO($_FILES['photo']['name']);

  if(empty($fileinfo['filename'])){
    $location="";
  }
  else{
  $newFilename=$fileinfo['filename'] . "." . $fileinfo['extension'];
  move_uploaded_file($_FILES["photo"]["tmp_name"],"images/foodonsale/" . $newFilename);
  $location="images/foodonsale/" . $newFilename;

 
  }

 $query = "UPDATE food_info SET f_name = '$foodname', f_price = '$price', f_photo = '$location' WHERE food_id='$id'";
  $result = mysqli_query($conn,$query) or die ("Could not execute query");

if($result){
 echo "<script type= 'text/javascript'> window.location='bis_view_foodonsale.php'</script>";}



?>