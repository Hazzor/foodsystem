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
   <style type="text/css">
   	
   	#user {
   		padding-top: 45px;
   		padding-left: 250px;
   		position: absolute;
   	}

   	#photo {
		height: 250px; 
		width: 380px;
		overflow: hidden;
	}
   </style>
  
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">


</head>

<body>
 	    <div class="header_bottom">
		 	  <div class="container">	 			
				<div class="logo">
					<h1><a href="index.php">UMP DINNER<span>Ordering</span></a></h1>
				</div>	
				<div id="user">	
				<?php
					/*
					 Filename: login-successful.php
					 Purpose: To display protected web page if user is valid.
					 Note: If you enter directly to this page, you will be checked by the authenticator, and then redirect to login-failed.html.
					*/

					include("authenticator.php");
					echo "<h3>Welcome, ".$_SESSION['SESS_NAME']." </h3>";
					?>
				</div>


			<div class="navigation">	
			<div>
              <label class="mobile_menu" for="mobile_menu">
              <span>Menu</span>
              </label>
              <input id="mobile_menu" type="checkbox">
				<ul class="nav">
              <li><a href="index.php">Home</a></li>                  
                     
              <li><a href="cust_viewOrder.php">View Order</a></li>
                  

            <li><a href="logout.php">Logout</a></li>

            <div class="left">
            	    
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
				<div class="main_title">Food Shops Available</div>
				<div class="divider"></div>
				</div>
         <div class="container"> 
         		
	 		 <div class="row grids text-center">
	 		 	<?php
			    include("dbase.php");

				$query ="SELECT business_id, b_name, b_location, b_timeStart, b_timeEnd, b_photo from business_info"; 
				$result = mysqli_query($conn,$query);
				if (mysqli_num_rows($result) > 0){ 
				// output data of each row
				while($row = mysqli_fetch_assoc($result)){

				$id = $row["business_id"];
				$b_photo = $row["b_photo"];
				$b_name = $row["b_name"];
			  	$b_location = $row["b_location"];
			   	$b_timeStart = $row["b_timeStart"];
			    $b_timeEnd = $row["b_timeEnd"]; 

			    
			    ?>

			    <div class="col-md-4">
					<div class="view view-tenth">
					      <a href="cust_orderFood.php?id=<?php echo $id; ?>">
						   <div class="inner_content clearfix">
							<div class="product_image" id="photo">
								<img src="<?php echo $b_photo; ?>" style="width:100%;" class="img-responsive" alt=""/>

								<div class="label-product">
                                <span class="new">From RM 5++</span> </div>
								<div class="mask" >

			                        <h2> <?php echo $b_name; ?></h2>
			                        
			                        <h3> One of the UMP best food ordering. Don't miss the chance to eat good food</h3>
			                        <div class="info"><i class="fa fa-search-plus"></i> </div>
			                    </div>
			                  	</div>
			                 </div>
				            </a> 
				       </div>
				       <div class="product_container wow bounceIn" data-wow-delay="0.4s">
				       
						  <h3><a href="cust_orderFood.php?id=<?php echo $id?> <?php $b_location?>"> <?php echo $b_name; ?></a></h3>
					      <div class="underheader-line"></div><br>
					 
					      <p><?php echo $b_location; ?></p>
					      <p><?php echo date('g:ia ', strtotime($b_timeStart)); ?> - <?php echo date('g:ia ', strtotime($b_timeEnd)); ?></p>

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
</div>
</ul>
</div>
</div>
</div>
</div>
</body>
</html>

	
