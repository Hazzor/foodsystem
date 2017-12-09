  

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
	td{
		padding:0px;
		font-size: 17px;
		padding-bottom: 5px;
	}
	.first{
		font-weight: 600;
	}
	h4{
		font-weight: bold;
	}
	.btn{
		color:white;
	}

	#photo {
		height: 200px; 
		width: 200px;
		overflow: hidden;
	}

	#user {
   		padding-top: 45px;
   		padding-left: 250px;
   		position: absolute;
   	}
   	
</style>

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
            <li><a href="index.php">Logout</a></li>
            
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
	        <div class="container" align="center" >
			<?php
			    include("dbase.php");
			     $id = $_GET['id'];
			     

				$query ="SELECT food_id, f_name, f_photo, f_price, b_location, b_timeStart, b_timeEnd FROM food_info, business_info WHERE 	food_id IN (SELECT food_fk FROM business_food_mapping WHERE business_fk IN (SELECT business_id FROM business_info WHERE business_id = $id ))  "; 
				$result = mysqli_query($conn,$query);
				if (mysqli_num_rows($result) > 0){ 
				// output data of each row
				while($row = mysqli_fetch_assoc($result)){
				$id = $row["food_id"];
				$f_name = $row["f_name"];
				$f_photo = $row["f_photo"];
			 	$f_price = $row["f_price"];
			  	$b_location = $row["b_location"];
			   	$b_timeStart = $row["b_timeStart"];
			    $b_timeEnd = $row["b_timeEnd"]; 
			    ?>
				<div class="card card-padding">
					  <div class="card-block">
					  	<div class="row">
					  		<div class="col-sm-6" align="center" id="photo">
					  			<img src="<?php echo $f_photo; ?>" width="100%">
					 	 	</div>

					  		<div class="col-sm-6" align="left">
					  		<h4 class="card-title"> <?php echo $f_name; ?> </h4>
					  		<hr>
					  			<table>
					  				<tr>
					  					<td style="width:30%" class="first"><p class="card-text">Location  </p></td>
					  					<td style="width:70%" >: <?php echo $b_location; ?></td>
					  				</tr>
					  				
					  				<tr>
					  					<td class="first"><p class="card-text">Time  </p></td>
					  					<td>: <?php echo date('g:ia ', strtotime($b_timeStart)); ?> - <?php echo date('g:ia ', strtotime($b_timeEnd)); ?></td>
					  				</tr>
					  				
					  				<tr>
					  					<td class="first"><p class="card-text">Price  </p></td>
					  					<td>: <?php echo "RM ".$f_price; ?></td>
					  				</tr>
					  			</table>
							    <br>
							    <div align="right">
								    <a href="cust_place_order.php?id=<?php echo $id; ?>" class="btn btn-success"><b>Order Food</b></a>
							    </div>

						    </div>

				    </div>
				  </div>
				</div>
				<?php
				}
				}else{
					echo "No food on sale today";
				}
				?>


			</div>
		</div>

</body>
</html>