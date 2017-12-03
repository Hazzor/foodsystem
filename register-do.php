<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Vintage Bootstarp Website Template | Contact :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300:700' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script>
		$(function() {
	    var button = $('#loginButton');
	    var box = $('#loginBox');
	    var form = $('#loginForm');
	    button.removeAttr('href');
	    button.mouseup(function(login) {
	        box.toggle();
	        button.toggleClass('active');
	    });
	    form.mouseup(function() { 
	        return false;
	    });
	    $(this).mouseup(function(login) {
	        if(!($(login.target).parent('#loginButton').length > 0)) {
	            button.removeClass('active');
	            box.hide();
	        }
	    });
	});
   </script>
   <!----font-Awesome----->
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
   <!-- Header -->
	<div class="header">    
		<div class="header_top">
			<div class="container">
			  <div class="headertop_nav">
				<ul>
					<li><a href="#">Contact</a> /</li>
					<li><a href="#">Sitemap</a> /</li> 
					<li><a href="#l">Feedback</a> /</li> 
					<li><a href="#">Worldwide Locations</a></li> 
				</ul>
			</div>
		    <div class="header-top-right">
		        <div class="login_box">
	    		   <div id="loginContainer">
	                  <a id="loginButton" class="active"><span class="active"><i class="search-icon"></i>Search</span></a>               
	                <div id="loginBox">                
	                    <form id="loginForm">
	                        <div class="search_box">
								<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
								<input type="submit" value="">
							</div>
	                    </form>
	                </div>
	              </div>
	           </div> 
			 </div>
			 <div class="clearfix"></div>
            </div>
		  </div>
 	    <div class="header_bottom">
		  <div class="container">	 			
				<div class="logo">
					<h1><a href="index.html">Vintage<span>Restaurant</span></a></h1>
				</div>				
			<div class="navigation">	
			<div>
              <label class="mobile_menu" for="mobile_menu">
              <span>Menu</span>
              </label>
              <input id="mobile_menu" type="checkbox">
				<ul class="nav">
                 <li><a href="index.html">Home</a></li>                  
              <li class="dropdown"><a href="room.html">Order</a>
                <ul class="dropdown2">
                  <li><a href="room.html">Arab Cuisine</a></li>
                  <li><a href="room.html">Just Eat</a></li>
                  <li><a href="room.html">Thai Food</a></li>
                </ul>
              </li>             
                  <li><a href="about.html">About</a></li>
                  <li><a href="index.html">Log In</a></li>
                  <li><a href="sign-up.html">Sign Up</a></li>
            <div class="clearfix"></div>
          </ul>
		</div>			
	   </div>
       <div class="clearfix"></div>		   
      </div>
     </div>	
	 <div class="reservation_banner">
		<div class="main_title">Sign Up</div>
		<div class="divider"></div>
	 </div>
    </div>
   <!-- Ends Header -->
    
<?php
include("dbase.php");
    
$userID = $_GET['matric'];
$query = "SELECT * FROM foodorder WHERE matricnumber='$userID'";
$result = mysqli_query($conn,$query);    
    
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while ($row = mysqli_fetch_assoc($result))
    {
        $id = $row["id"];
        $name = $row["name"];
        $matricnumber = $row["matricnumber"];
        $password = $row["password"];
        $gender = $row["gender"];
        $phonenumber = $row["phonenumber"];
        $hostel = $row["hostel"];
        
        ?>
    
    <h2 id="signup" align="center">Your Registration Info</h2>
    
    <!-- table -->
    <table class="sign-up-table" align="center">
    <tr>
      <th>Name:</th>
      <td> <?php echo $name; ?><br> </td>
    </tr>
    <tr>
      <th>Matric Number:</th>
      <td> <?php echo $matricnumber; ?> </td>
    </tr>
    <tr>
      <th>Gender:</th>
      <td> <?php echo $gender; ?><br> </td>
    </tr>
    <tr>
      <th>Phone Number:</th>
      <td> <?php echo $phonenumber; ?><br> </td>
    </tr>
    <tr>
      <th>Hostel:</th>
      <td> <?php echo $hostel; ?><br> </td>
    </tr>
	
	<tr>
	<td> <div class="sign-up-form">	
	<p><a href="index.html"><input type="submit" value="Order Now!"></a></p>
	<div> </td>
      
    </tr>
	
	
	
  </table>

        <?php
    }
} else {
    echo "0 results";
}
?>  

    
</body> 
</html>