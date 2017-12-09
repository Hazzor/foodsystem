<!-- JusT FOR TESTING -->
<!-- To insert data of masuk.php into database. -->
<?php

include("dbase.php");

// Dapatkan Tarikh Dan Masa Masuk
extract($_POST);
$query = "INSERT INTO foodorder (c_name, c_matricNum, c_password, c_gender, c_hpNum, c_location) VALUES ('$name', '$matricnumber', '$password', '$gender', '$phonenumber', '$hostel')";
//$queryID = "SELECT id FROM foodorder WHERE matricnumber = '$matricnumber'";
if (mysqli_query($conn, $query))
{
	//$userID = mysqli_query($conn, $queryID);
    echo "<script type='text/javascript'> window.location='register-do.php?matric=$matricnumber' </script>";
}
else 
{
    echo "Insertion Failed: " . $query . "<br>" . mysqli_error($conn);
}
?>