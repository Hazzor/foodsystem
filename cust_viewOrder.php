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
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
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
	        <div class="order_banner" style="margin-bottom:40px">
				<div class="main_title">Today's Order</div>
				<div class="divider"></div>
			</div>        	
	        <div class="container" align="center" >
	        	<?php
	        	
			    include("dbase.php");
			    $today = date("d-m-Y", time());
				
				$query ="SELECT f_name, f_photo, f_price, b_location, b_timeStart, b_timeEnd, b_name, quantity, tarikh FROM food_info, business_info, business_food_mapping, customer_food_mapping, customer_info WHERE  customer_info.customer_id='14' AND customer_food_mapping.tarikh = '$today' AND customer_info.customer_id = customer_food_mapping.customer_fk AND customer_food_mapping.food_fk = food_info.food_id AND food_info.food_id = business_food_mapping.food_fk AND business_info.business_id ";
				
				$result = mysqli_query($conn,$query);
				if (mysqli_num_rows($result) > 0){ 
				// output data of each row
				while($row = mysqli_fetch_assoc($result)){
				$tarikh = $row ["tarikh"];
				$quantity = $row ["quantity"];
				$b_name = $row ["b_name"];
				$f_name = $row["f_name"];
				$f_photo = $row["f_photo"];
			 	$f_price = $row["f_price"];
			  	$b_location = $row["b_location"];
			   	$b_timeStart = $row["b_timeStart"];
			    $b_timeEnd = $row["b_timeEnd"]; 
			    $total = $quantity*$f_price;
			    $masa = $b_timeStart; 
				date('h:i a ', strtotime($masa));
			    ?>
				<div class="card card-padding">
					  <div class="card-block">
					  	<div class="row">
					  		<div class="col-sm-6">
					  			<img src="images/arabfood1.jpg" width="100%">
					 	 	</div>

					  		<div class="col-sm-6" align="left">
							    <h4 class="card-title"><?php echo $f_name; ?></h4>
							    <br>
							    <p class="card-text">Seller Name : <?php echo $b_name; ?></p>
							    <p class="card-text">Location : <?php echo $b_location; ?> </p>
							    <p class="card-text">Distribution date : <?php echo $tarikh; ?></p>
							    <p class="card-text">Distribution time : <?php echo date('g:i a ', strtotime($b_timeStart)); ?> - <?php echo date('g:i a ', strtotime($b_timeEnd)); ?></p>
								<p class="card-text">Quantity : <?php echo $quantity; ?></p>
							    <p class="card-text">Price : <?php echo "RM ".number_format((float)$total, 2, '.', '');; ?></p>
						    </div>

				    </div>
				  </div>
				</div>
				<?php
				}
				}else{
					echo "No results";
				}
				?>
			</div>
		</div>

</body>
</html>


