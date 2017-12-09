<?php
session_start();

include("dbase.php");
$foodid = $_POST['id'];
$date = date("d-m-Y");
$quantity = $_POST['quantity'];

$c_id = $_SESSION['SESS_CUSTOMER_ID'];

$query = "INSERT into customer_food_mapping (customer_fk,food_fk,quantity, tarikh) VALUES($c_id, $foodid, $quantity, '$date')";
  $result = mysqli_query($conn,$query) or die ("Could not execute query");

if($result){
        
  echo "<script type= 'text/javascript'> window.location='cust_viewOrder.php'</script>";
  // echo $c_id;
}
?>