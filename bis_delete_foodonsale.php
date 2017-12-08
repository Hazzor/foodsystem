<?php
include ("dbase.php"); 
$idURL = $_GET['id'];
$query = "DELETE FROM food_info WHERE food_id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in edit.php");
if($result){
echo "<script type= 'text/javascript'> window.location='bis_view_foodonsale.php'</script>";}
?>