<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>UMP Dinner Ordering</title>
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
<script src="js/modernizr.custom.js" type="text/javascript"></script>
<script src="js/jquery.openCarousel.js" type="text/javascript"></script>
<script src="js/fwslider.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
	    $('#slider').fwslider({
	        auto:     true,  //auto start
	        speed:    300,   //transition speed
	        pause:    4000,  //pause duration
	        panels:   5,     //number of image panels
	        width:    1680,
	        height:   500,
	        nav:      true   //show navigation
	    });
	});
	</script>		
 <!---- animated-css ---->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
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
  
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<style type="text/css">
	.error {color: #FF0000;}
	/** View Customer Part **/
.view_cust table, th, td {
    border: 0.1px solid black;
    border-collapse: collapse;
    padding: 1.2em;
    margin: 2em 0;
    text-align: justify;
    width: 70%;
}

.view_cust th, td{
	padding: 10px;
}

.view_cust th{
    background-color: #25C1C0;
    color: black;
}

</style>

</head>

<body>

 	    <div class="header_bottom">
		 	  <div class="container">	 			
				<div class="logo">
					<h1><a href="index.html">UMP DINNER<span>Ordering</span></a></h1>
				</div>				
			<div class="navigation">	
			<div>
              <label class="mobile_menu" for="mobile_menu">
              <span>Menu</span>
              </label>
              <input id="mobile_menu" type="checkbox">
				<ul class="nav">
              <li><a href="index.html">Home</a></li>                  
                     
              <li><a href="about.html">View Order</a></li>
                  

            <li><a href="index.html">Logout</a></li>
            
            <div class="clearfix"></div>
          </ul>
		</div>			
	 </div>
     <div class="clearfix"></div>		   
    </div>
   </div>	
  </div>
   <!-- Ends Header -->
   <script>
		document.getElementById("status_update").addEventListener("click", myFunction);

		function myFunction() {
				 document.getElementById("status_update").innerHTML = "Paid";
				 document.getElementById("status_update").style.color = "green";
		}
	</script>

    <!------------ Start Content ---------------->

        <div class="main">
	        <div class="order_banner">
				<div class="main_title">Customer List</div>
				<div class="divider"></div>
			</div>
			<div class="reservation_top">
            	<div class="view_cust" align="center">
					<h2>Today's Customer List</h2>	
					<h3>KK4</h3>

					<table>
						<tr>
							<th>Bil</th>
							<th>Name</th>
							<th>Set</th>
							<th>Quantity</th>
							<th>Total</th>
							<th>Status</th>
						</tr>
						<tr>
							<?php
							//set counter variable 
							$counter = 1; 
							while($row = mysqli_fetch_array($_POST)) 
							  { 
									echo "<td>" . $counter . "</td>"; 
								    echo "<td>" . $row['name'] . "</td>"; 
								    echo "<td>" . $row['set'] . "</td>"; 
								    echo "<td>" . $row['quantity'] . "</td>"; 
								    echo "<td>" . $row['total'] . "</td>";
						   			echo "<td><button id=status_update>" . Unpaid . "</button></td>";
						 
							
							$counter++; //increment counter by 1 on every pass 
							  } 
							echo "</table>";
							?>	
						</tr>


					</table>


<!-- Example code
	<?php
//set counter variable 
$counter = 1; 
while($row = mysqli_fetch_array($_POST)) 
  { 
  echo "<tr>"; 
  echo "<td>" . $counter . "</td>"; 
  echo "<td>" . $row['name'] . "</td>"; 
  echo "<td>" . $row['speech'] . "</td>"; 
  echo "</tr>"; 
  $counter++; //increment counter by 1 on every pass 
  } 
echo "</table>";
?>
-->