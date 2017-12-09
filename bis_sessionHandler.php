<?php
/*
 Filename: sessionHandler.php
 Purpose: To handle login information and create a session for that user.
*/

//Start session
session_start();

//Validation error flag
$errflag = false;

//Input Validations
if ($_POST['b_matricID'] == '')
{
    $errmsg_arr[] = 'Login ID missing';
    $errflag = true;
}

if ($_POST['b_password'] == '')
{
    $errmsg_arr[] = 'Password missing';
    $errflag = true;
}

//If there are input validations, redicrect back to the login form
if ($errflag)
{
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: login.php");
    exit();
}


// to make a connection with database
$conn = mysqli_connect("localhost", "root", "") or die (mysqli_error()); 

// To select one particular database to be used 
mysqli_select_db($conn,"foodsystem") or die(mysqli_error());

// to create a query to be executed in sql
$matricnum = $_POST['b_matricID'];
$password = $_POST['b_password'];
$query = "SELECT * FROM business_info WHERE b_matricID = '$matricnum' AND b_password = '$password'";

// to run sql query in database
$result = mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));

// Check whether the query was sucessful or not
if (isset($result))
{
    if (mysqli_num_rows($result) == 1)
    {
        //Login Successful
        session_regenerate_id();
        $member = mysqli_fetch_assoc($result);
        $_SESSION ['SESS_MEMBER_ID'] = $member['business_id'];
        $_SESSION ['SESS_NAME'] = $member['b_name'];
        $_SESSION ['STATUS'] = true;
        session_write_close();
        header("location: bis_login-successful.php");
        exit();
    }
    else
    {
        //Login Failed
        header("location: login-failed.html");
        exit();    
    }
}
else
{
    die("Query failed");    
}

?>