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
    text-align: center;
    
}

.view_cust th,td { width: 5em; overflow: hidden; }
.view_cust table { width : 60%;text-overflow: ellipsis; white-space:nowrap;  }
#status {
	width: 120px;
}

.view_cust th, td{
	padding: 0.5em 1em;
}

.view_cust th{
    background-color: #25C1C0;
    color: black;
}

#user {
   		padding-top: 45px;
   		padding-left: 250px;
   		position: absolute;
   	}

   	.delete {
   			color: #fff;
		 	background-color: #FA504B;
			border-color: #DB3933;
			text-decoration: none;
			border-width: 0.1px;
			padding: 0.2em 0.5em;
   	}
   	.delete a{
   		text-decoration: none;
   		color: white;
   	}
   	.delete:hover {
   		background-color: green;
   		border-color: green;
   		border-width: 0.1px;
   	}

</style>



</head>

<body>

 	    <div class="header_bottom">
		 	  <div class="container">	 			
				<div class="logo">
					<h1><a href="bis_home.php">UMP DINNER<span>Ordering</span></a></h1>
				</div>				
				<div id="user">	
				<?php
					/*
					 Filename: login-successful.php
					 Purpose: To display protected web page if user is valid.
					 Note: If you enter directly to this page, you will be checked by the authenticator, and then redirect to login-failed.html.
					*/

					include("authenticator.php");
					echo "<h3>Welcome, Seller ".$_SESSION['SESS_NAME']." </h3>";

					$business_id = $_SESSION['SESS_MEMBER_ID'];
					?>
				</div>
			<div class="navigation">	
			<div>
              <label class="mobile_menu" for="mobile_menu">
              <span>Menu</span>
              </label>
              <input id="mobile_menu" type="checkbox">
				<ul class="nav">
              <li><a href="bis_home.php">Home</a></li>                  
                     
<!--               <li><a href="bis_view_cust.php">View Customer</a></li> -->
                  

            <li><a href="logout.php">Logout</a></li>
            
            <div class="clearfix"></div>
          </ul>
		</div>			
	 </div>
     <div class="clearfix"></div>		   
    </div>
   </div>	
  </div>
   <!-- Ends Header -->

    <!------------ Start Content ---------------->

        <div class="main">
	        <div class="order_banner">
				<div class="main_title">Customer List</div>
				<div class="divider"></div>
			</div>
			<div class="reservation_top">
            	<div class="view_cust" align="center">
					<h2>Today's Customer List</h2>	
					<p><br></p>
					<table>
						<tr>
							<th>Bil</th>
							<th>Customer Name</th>
							<th>Food Name</th>
							<th>Food Price</th>
							<th>Quantity</th>
							<th>Total</th>
							<th>Status</th>
						</tr>
						<tr>
							<?php
							//set counter variable 
							$counter = 1; 
						
			    include("dbase.php");
			    $today = date("d-m-Y", time());
			    

				$query ="SELECT food_id, f_name, f_photo, f_price,  c_name, quantity, customer_id, order_id, tarikh FROM food_info, business_info, customer_info, customer_food_mapping, business_food_mapping WHERE  food_info.food_id = business_food_mapping.food_fk AND business_info.business_id=business_food_mapping.business_fk AND business_info.business_id='$business_id' AND customer_info.customer_id = customer_food_mapping.customer_fk AND customer_food_mapping.food_fk = food_info.food_id AND customer_food_mapping.tarikh = '$today'"; 

				$result = mysqli_query($conn,$query);
				if (mysqli_num_rows($result) > 0){
				$totalPrice = 0;
				// output data of each row
				while($row = mysqli_fetch_assoc($result)){
				

				$id = $row["order_id"];
				$f_name = $row["f_name"];
			 	$f_price = $row["f_price"];
			  	$c_name = $row["c_name"];
			  	$quantity = $row["quantity"];
			  	$order_id = $row["order_id"];
			  	$totalPrice = $f_price*$quantity;

			    ?> 		
			     <form method="POST" action="bis_delete_customerScript.php" enctype="multipart/form-data">
			    <tr> 
			    					<div id="bil">
										<td><?php echo $counter; ?></td>
									</div>
								    <td><?php echo $c_name; ?></td>
								    <td><?php echo $f_name; ?></td>
								    <td>RM <?php echo $f_price; ?></td>
								    <td><?php echo $quantity; ?></td>
								    <td><b>RM <?php echo $totalPrice; ?></b></td>
								    <td id="status"><button class="delete" onclick="deletefunc()"><a href="bis_delete_customerScript.php?id=<?php echo $id; ?>">Unpaid</a></button></td>

								    <script>
										function deletefunc() 
										{
										    confirm("Are you sure you want to remove the customer?");
										}
									</script>

							<?php $counter++; ?>
				</tr>	
			</form>
					<?php
				}
				}else{
					echo "No results";
				}
				?>
			
			    
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>