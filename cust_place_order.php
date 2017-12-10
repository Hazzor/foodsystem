<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

include("dbase.php");
$foodid = $_GET['id'];

$query = "SELECT f_name, f_photo, f_price FROM food_info WHERE food_id = '$foodid'";
$result = mysqli_query($conn,$query) or die ("Could not order food");

if (mysqli_num_rows($result) > 0){ 
        // output data of each row
        $row = mysqli_fetch_assoc($result);

        $f_name = $row["f_name"];
        $f_photo = $row["f_photo"];
        $f_price = $row["f_price"];
      }

?>
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

    $('#my-imageupload').imageupload(options);


   </script>
  
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<style type="text/css">
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
          $customer_id = $_SESSION['SESS_MEMBER_ID'];
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
            <li><a href="logout.php">Logout</a></li>
            
            <div class="clearfix"></div>
          </ul>
    </div>      
   </div>
     <div class="clearfix"></div>      
    </div>
   </div> 

   <!-- Ends Header -->
    <!------------ Start Content ---------------->
        <div class="main">
          <div class="reservation_banner" style="margin-bottom:40px">
            <div class="main_title">Place order</div>
            <div class="divider"></div>
         </div>

          <div class="container">
            <div class="sign-up-form">
            <form method="POST" action="cust_place_orderscript.php" enctype="multipart/form-data">
              <div class="row" align="center">
                <div class="col-md-2"></div>
              <div class="col-md-3">
                <label class="control-label"><b>Food image:</b></label><br>
                            <img  src="<?php echo $f_photo ?>" width="300px"/>
             <!--                  <script>
                                var loadFile = function(event) {
                                  var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                };
                              </script> -->
              </div>

                   <div class="col-md-7" align="center">

                          <h2><b><?php echo $f_name; ?></b></h2><br>
                          <div class="form-group" >
                             <label for="price"><b>Quantity :</b></label>
                             <input type="number" style="width:200px" name="quantity" class="form-control " placeholder="e.g : 5" value="1" onchange="totalprice(this.value)" min="1" max="10">
                             <input type="hidden" name="id" value="<?php echo $foodid; ?>">
                          </div><br>

                          <p style="font-size:20px" >Price : RM<?php echo $f_price; ?></p><br><hr>
                          <p style="font-size:25px"><span style="color:red"><b>Total Price : RM <span id="totalprice"></span> </span></p>
                          <script type="text/javascript">

                             document.getElementById("totalprice").innerHTML = 1 * <?php echo $f_price; ?>;

                            function totalprice(val) {
                              document.getElementById("totalprice").innerHTML = val * <?php echo $f_price; ?>;
                              // totalprice = val;
                                // alert("The input value has changed. The new value is: " + val);
                            }
                          </script>
                          <br>
                          <a><input type="submit" class="btn btn-primary" value="Order Food"></a>

                    <div class="clearfix"></div>
                         </div>
                         </div>

                    
            </form>
            </div>
         </div>
      </div>
</body>
</html>


