

<?php
include ("dbase.php"); 
include("authenticator.php");

$idURL = $_GET['id'];
$query = "DELETE FROM customer_food_mapping WHERE order_id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in edit.php");
if($result){
echo "<script type= 'text/javascript'> window.location='bis_view_cust.php'</script>";}
?>