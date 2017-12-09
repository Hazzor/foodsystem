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

    $('#my-imageupload').imageupload(options);


   </script>
  
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<style type="text/css">

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
            <div class="main_title">Sell food</div>
            <div class="divider"></div>
         </div>

          <div class="container">
            <div class="sign-up-form">
            <form method="POST" action="bis_addFoodscript.php" enctype="multipart/form-data">
              <div class="row" align="center">
                <div class="col-md-2"></div>
              <div class="col-md-3">
                <label class="control-label"><b>Add food image here:</b></label><br>
                                  <input type="file" name="photo" onchange="loadFile(event)" accept="image/*">
                                  <br><br>
                            <img  id="output" width="300px"/>
                              <script>
                                var loadFile = function(event) {
                                  var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                };
                              </script>
              </div>

                   <div class="col-md-7" align="center">
                                  
  <div class="form-group" >
                           <label for="foodname"><b>Food Name :</b></label>
                          <input type="text" name="foodname" class="form-control " placeholder="e.g : Nasi Goreng">
  </div>
  <br>
  <div class="form-group" >
                           <label for="price"><b>Price (RM):</b></label>
                           <input type="number" name="price" class="form-control " placeholder="e.g : 5">
  </div>
                          <br>

                          <input type="submit" class="btn btn-primary" value="Sell Food">

                    <div class="clearfix"></div>
                         </div>
                         </div>

                    
            </form>
            </div>
         </div>
      </div>
</body>
</html>


