<html>
	<head>
		<title>Business Expo</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="css/font-awesome.min.css" rel="stylesheet">
    	<link href="css/animate.min.css" rel="stylesheet">
    	<link href="css/prettyPhoto.css" rel="stylesheet">
    	<link href="css/responsive.css" rel="stylesheet">
    	<link href="css/main.css" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Muli"/>
        <link href="css/hover.css" rel="stylesheet" media="all">
    </head>
		
	<style type="text/css">
		.navbar-inverse .navbar-nav > li > a,{
			font-family:Muli;
                        
		}

        #map-canvas{
                    position:fixed;
                    float:right;
                    margin:60 60 10px 10px;
                    bottom:20;
                    width:400px;
                    height:350px;
                   }

        #footer{
                background-color:#D0D0CD; 
                position:absolute; 
                bottom:0; 
                padding-right:180px;
                color:#000;
               }

        .separate{
                 padding-top: 50px;
        }       



	</style>

         <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(0.1000, 34.7500),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>





	<body style="overflow-x:hidden;">
         
		
      </div><!-- /.container -->
    </nav>
  -->
 <!--</header> -->

<nav class="navbar navbar-fixed-top navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
        
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Drop down1</a></li>
                                <li><a href="#">Drop down2</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Events</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Exhibitors <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Drop down1</a></li>
                                <li><a href="#">Drop down2</a></li>
                            </ul>
                        </li>
                        <li><a href="gallery.php">Gallery</a></li> 
                        <li><a href="#">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav>

<div class="row" style="padding-top:70px; padding-bottom:20px;">
 <div class="separate">
    <div class="container" style="background-color:#D6E3E3; padding-bottom:0px; border:5px; border-color:#66FF33;">
      <div id="map-canvas"></div>
    <address>
    
      <p><h3><br><strong>Contact Us</strong></h3>
        </p>

        <p>We are here to answer any questions about your businessExpo experience. Reach out to us<br>
        and we'll respond as soon as we can.

        <br><br>
        Even if there's something you've always wanted to experience and can't find it on businessExpo,<br>
        let us know and we promise we will try our best to find it for you and gladly make you our delegate.</p>
        <p><u>For more information, contact us on:</u><br><br>
        Telephone: +254 20 2463040<br><br> 
        Mobile: +254719742150 or +254731332544<br><br>

        Email 1: <a href="info@businessexpo.co.ke">info@businessexpo.co.ke</a><br>
        Email 2: <a href="businessexpocountyedition@gmail.com">businessexpocountyedition@gmail.com</a><br>
        Facebook page: <a href="www.facebook.com">Business Expo, Kisumu County Edition 2015</a>
      </p>

    </address> 
</div>  
</div>
</div>

<div id="footer">
<br>
<div class="row" style="padding-bottom:10px;">
<div class="container">
<div class="col-md-4" style="padding-left:80px;">
 <p>&copy; 2015 Business Expo &middot; <a href="#">Terms</a></p>
</div>
<div class="col-md-4">
</div>
</div>
</div>
</div>
</body>
</html>
