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
   <!-- Ends Header -->
   <style>
  

	</style>
      <div class="main">
	        <div class="order_banner" style="margin-bottom:40px">
				<div class="main_title">View your Order for today!</div>
				<div class="divider"></div>
			</div>        	
	        <div class="container" align="center" >

				<div class="card card-padding">
					  <div class="card-block">
					  	<div class="row">
					  		<div class="col-sm-6">
					  			<img src="images/arabfood1.jpg" width="100%">
					 	 	</div>

					  		<div class="col-sm-6" align="left">
							    <h4 class="card-title">Nasi goreng Ali</h4>
							    <p class="card-text">Quantity : 2 packs</p>
							    <p class="card-text">Location : KK4</p>
							    <p class="card-text">Distribution time : 6.30pm - 7.00pm</p>
							    <p class="card-text">Price : RM 5</p>
						    </div>

				    </div>
				  </div>
				</div>

				<div class="card card-padding">
					  <div class="card-block">
					  	<div class="row">
					  		<div class="col-sm-6">
					  			<img src="images/arabfood2.jpg" width="100%">
					 	 	</div>

					  		<div class="col-sm-6" align="left">
							    <h4 class="card-title">Nasi Arab</h4>
							    <p class="card-text">Quantity : 1 packs</p>
							    <p class="card-text">Location : KK4</p>
							    <p class="card-text">Distribution time : 6.30pm - 7.00pm</p>
							    <p class="card-text">Price : RM 5</p>
						    </div>

				    </div>
				  </div>
				</div>

			</div>
		</div>
 	<!-- <div class="sas">
  <div align="center" class="card" style="width: 20rem;">
  <img class="card-img-top" src="...">
  <div class="card-block">
    <h3 class="card-title">Today's Order</h3>
    <h4 class="card-text">Name:
    					 <br>Quantity:
    					 <br>Distribution time:
    					 <br>Location:
    					 <br>Total price:
    </h4>
 	</div>
  </div>
 --></body>
</html>

