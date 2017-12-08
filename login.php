<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
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
	<style type="text/css">

		html{
			overflow: hidden;
		}
		a{
			color:red;
		}
		select{
			margin-bottom:15px;
			font-size:16px;
		}
		.side-right{
			background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.2) );
		}
		.side-left{
			
			background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("images/login-photo.jpg");
			background-size:cover;
		}
		.middle{
			
			margin: 0 auto;
			margin-top:20%;
			width:400px;
			text-align: left;
		}
		.login-form{
			text-align: left;
			box-shadow: 10px 10px 30px #888888;
			padding:30px;
			width:80%;
			height:40%;
			margin:20% auto;
			height:70%;
			color:#353638;
			background-color: white;
		}
		form{
			margin-top:10%;
		}
		.middle p{
			font-size:17px;

		}
		.logo{
			float:none;
		}
		.logo h1 span{
			font-size:30px;
			color:#000;
			display: block;
		}
		.logo h1{
			font-size:4.5em;
		}
		#ordering{
			color:white;
		}
		.btn-transparent{
			background: transparent;
			color:white;
			font-size:25px;
			letter-spacing: 1px;
			font-family: 'Open Sans Condensed', sans-serif;
			margin-top:0px;
		}

		.hide{
			display:none;
			}

		.show{
			display:block;
		}

		#pass{
			width:100%;
		}
		
	</style>
    
    <?php
/*
  Filename: login.php
  Purpose: Login interface
*/
 //Start Session
 session_start();

?>
    
</head>
<body>
<div class="container">
	<div id="splitlayout" class="splitlayout">

		<div class="intro">
			<div class="side side-left">
				<div class="middle">
					<div class="logo">
					<h1><a href="#">UMP DINNER<span id="ordering">Ordering</span></a></h1>
				</div>	
					<div>
					<p >We are the pioneers when it comes to online food ordering in university. UMP Dinner Ordering has been operating since 2007! Join us and be a part of something big! </p>
					<br><br><br><br></div>
					<button type="button" class="btn btn-default btn-transparent" onclick="location.href='sign-up.html';">Register Now</button>
				</div>
				<div class="overlay"></div>
            </div>
            
            <?php
            // to display error message if username and password is invalid
                if (isset($_SESSION['ERRMSG_ARR']))
                {
                    echo "<h1 style='color:red'>Error found: ";
                    for ($i=0; $i<count($_SESSION['ERRMSG_ARR']); $i++)
                    {
                        echo $_SESSION['ERRMSG_ARR'][$i]."!";
                    }
                    echo "</h1>";
                    unset($_SESSION['ERRMSG_ARR']);
                }  
            ?>
            
			<div class="side side-right">
				<div class="login-form"> 
					<div align="center">
						<h1>Login </h1>
						<button onclick="customerFunction()" class="btn btn-primary btn2 btn-normal btn-inline ">Customer</button>
						<button onclick="sellerFunction()" class="btn btn-primary btn2 btn-normal btn-inline ">Seller</button>
					</div>

					<script>
						function customerFunction() 
						{

  							 if (document.getElementById('seller2').style.display == 'block') 
							{
							  document.getElementById('seller2').style.display = 'none';
		                  	  document.getElementById('customer1').style.display = 'block';
		                  	}
		                  	else
		                  		 document.getElementById('customer1').style.display = 'block';
  							 
						}

						

						function sellerFunction() 
						{
							if (document.getElementById('customer1').style.display == 'block') 
							{
								document.getElementById('customer1').style.display = 'none';
		                  	  document.getElementById('seller2').style.display = 'block';
		                  	}
		                  	else
		                  		 document.getElementById('seller2').style.display = 'block';
  							 
						}


					</script>

					<!--Customer -->
					<div id="customer1" style="display:none;">
						<form method="post" action="cust_sessionHandler.php">
	                    <div class="form-group">
						    <label for="c_matricNum">Customer Matric Number:</label>
						    <input type="text" class="form-control" name="c_matricNum">
						  </div>
						  <div class="form-group">
						    <label for="c_password">Password:</label>
						    <input type="password" id="pass" class="form-control" name="c_password">
						  </div>

						  <button type="submit" class="btn btn-block btn-lg btn-primary	">Login</button>
							  <br><br>
							  <p>Don't have an account yet?  <a href="sign-up.html">Register Now</a></p> 
						</form>
					</div>


					<!-- Seller -->
					<div id="seller2" style="display:none;">
						<form method="post" action="bis_sessionHandler.php">
	                    <div class="form-group">
						    <label for="b_matricNum">Seller Matric Number:</label>
						    <input type="text" class="form-control" name="b_matricID">
						  </div>
						  <div class="form-group">
						    <label for="b_password">Password:</label>
						    <input type="password" id="pass" class="form-control" name="b_password">
						  </div>

						  <button type="submit" class="btn btn-block btn-lg btn-primary	">Login</button>
							  <br><br>
							  <p>Don't have an account yet?  <a href="sign-up.html">Register Now</a></p> 
						</form>
					</div>

	
				</div>
				<div class="overlay"></div>
			</div>
		</div><!-- /intro -->
		
		
	</div><!-- /splitlayout -->
</div><!-- /container -->
</body>
</html>