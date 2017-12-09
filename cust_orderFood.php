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

	#orderfood_banner{

	background: url("images/order.jpg")no-repeat center top;
	background-size: 100% 100%;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	background-position: center;
	padding: 2em 0 3em;
}
#short {
	width: 5px;
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
    <!------------ Start Content ---------------->
        <div class="main">
	        <div class="order_banner">
				<div class="main_title">ORDER HERE</div>
				<div class="divider"></div>
			</div>        	
	        <div class="container">          	 
		 		<div class="row grids text-center">
					<div class="col-md-4">
						<div class="view view-tenth">
							<div class="inner_content clearfix">
								<div class="product_image">
									<img src="images/arabfood1.jpg" class="img-responsive" alt=""/>
										<div class="label-product">
	                                		<span class="new">Roasted Chicken Al-Kabsa</span> 
	                                	</div>
									<div class="mask" >
				                        <h2>Delight Arabic Cuisine</h2>
				                        <h3>Al kabsa is a traditional delicious chicken and rice dish from Saudi Arabia</h3>
				                        <div class="info"><i class="fa fa-search-plus"></i> </div>
				                    </div>
				               	</div>
				           	</div>
					   	</div>
								
			       	</div>
					    <div class="col-md-4">
							<div class="view view-tenth">
									<div class="inner_content clearfix">
											<div class="product_image">
												<img src="images/arabfood2.jpg" class="img-responsive" alt=""/>
												<div class="label-product">
				                                		<span class="new">Grilled Chicken Kebab</span> 
				                            	</div>
												<div class="mask" >
							                        <h2>Delight Arabic Cuisine</h2>
							                        <h3>Grilled Chicken Kebab is a juicy tender grilled chicken. Skewers are bursting with vibrant flavor</h3>
							                        <div class="info"><i class="fa fa-search-plus"></i> </div>
							                    </div>
						                  	</div>
						           	</div>
						    </div>
					       	
			            </div>
					    <div class="col-md-4">
						  	<div class="view view-tenth">
							   	<div class="inner_content clearfix">
									<div class="product_image">
										<img src="images/arabfood3.jpg" class="img-responsive" alt=""/>
										<div class="label-product">
	                                		<span class="new">Grilled Tandoori Chicken</span> 
	                                	</div>
										<div class="mask">
					                        <h2>Delight Arabic Cuisine</h2>
					                        <h3>Tandoori chicken is an amazingly simple way to make grilled chicken drumsticks.</h3>
					                         <div class="info"><i class="fa fa-search-plus"></i> </div>
					                    </div>
				                    </div>
				                </div>
					        </div>
					       
			            </div>
				</div>
				<!-- DATA --> 
			<tbody>
				<?php 
					 include("dbase.php");

				$query ="SELECT food_id, f_name,  f_price, b_location, b_timeStart FROM food_info, business_info WHERE food_id IN (SELECT food_fk FROM business_food_mapping WHERE business_fk IN (SELECT business_id FROM business_info WHERE business_id='1')) "; 
				$result = mysqli_query($conn,$query);
				if (mysqli_num_rows($result) > 0){ 
					while($row = mysqli_fetch_assoc($result)){
						?>
						<form method="post" action="enter_order.php">
						<table class="order_table" align="center">
					 		<tr>
								<th>Food Name:</th>
	                            <td><?php echo $row['f_name']; ?></td>
	                        </tr>

	                        <tr>
                            	<th>Quantity:</th>
                            	<td><input type="number" name="quantity"></td>
                            </tr>

                            <tr>
                            	<th>Time Distribute</th>
                            	<td><?php echo $row['b_timeStart']; ?></td>
                            </tr>
							
                            <tr>
                            	<th>Location</th>
                            	<td><?php echo $row['b_location']; ?></td>
                            </tr>
                            <tr>
                            	<th>Price</th>
                            	<td><?php echo $row['f_price']; ?></td>
                            </tr>
                            
                            
                        </table>
                            <!-- Submit -->
                            
						</tbody>
					</div>
				</div>
                
				<?php
				}
				}else{
					echo "No results";
				}
				?>
				<div class="order" align="center">
								<p><input type="submit" value="Order Now!"></p>
							</div>
			</body>
			</html>
	