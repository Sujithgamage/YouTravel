<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Home</title>
	<meta charset="utf-8">
	 
    <meta name="description" content="Codester is a free responsive Bootstrap template by Dzyngiri">
    <meta name="keywords" content="free, template, bootstrap, responsive">
    <meta name="author" content="Inbetwin Networks">  
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<style type="text/css">
	body,td,th {
	font-family: "Open Sans", sans-serif;
}
body {
	background-image: url(img/wall.jpg);
}
    </style>
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>    
	<script type="text/javascript" src="js/touchTouch.jquery.js"></script>
	<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}	</script>

	<script>		
		 jQuery(window).load(function() {	
		 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();    }	
		 
     jQuery('.magnifier').touchTouch();			
    jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});	
  		  }); 
				
	</script>

	 
  
  <!--Google analytics code-->	  
	  <script type="text/javascript">
           var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-29231762-1']);
          _gaq.push(['_setDomainName', 'dzyngiri.com']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
      </script>
</head>

	<body>
    <div class="spinner"></div> 
<!-- header start -->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href=""><img alt="" src="img/logo.png"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li ><a href="Rad_Details/index.php">Home</a></li>
                <li><a>Drivers</a>
                 <ul>
                    <li><a href="DriDetails.php">Details</a></li>
                    <li><a href="addNewDriver.php">Add New</a></li>
                    <li><a href="EditDrivers.php">Edit Details</a></li>
                    
                  </ul>
                </li>
                <li><a>Vehicle</a>
                 <ul>
                     <li><a href="vehicalDetails.php">Details</a></li>
                     
                     <li><a href="editVehical.php">Edit Details</a></li>
                    
                  </ul>
                </li>
                <li  class="active"><a>Customers</a>
                <ul>
                    <li><a href="CusAdmin.php">Details</a></li>
                    <li><a href="EditCustom.php">Edit Details</a></li>
                    
                  </ul>
                </li>
                
                <li class="sub-menu"><a>Tour</a>
                      <ul>
                    <li><a href="Tours.php">Tour Details</a></li>
                    <li><a href="Upcoming.php">Up Coming</a></li>
                    <li><a href="CustomDetails.php">Add Tour</a></li>
                  </ul>
                    </li>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
 
    </header>

          <h3><font color="black">Add Customer Login</font></h3> </div>
         
         <?php

 

 
 
if(isset($_POST['vid'])){

 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
mysqli_select_db( $con,"project");
  
 $id=$_POST['id'];
  $veh=$_POST['fname'];
 
   $uname="b"."$id";
 
     mysqli_query($con,"create table `".$uname."` (sender varchar(100),message varchar(1000)) ");  
   
    mysqli_query($con,"Insert into  Customerlogin  values('$id','$veh')");
    
	 mysqli_close($con);
	
	
}


if(isset($_POST['delecus'])){

 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
mysqli_select_db( $con,"project");
  
 $id=$_POST['did'];
   

      $uname="b"."$id";
 
    
    

  mysqli_query($con,"delete  from selecttour where cust_id = '$id'");
  
  mysqli_query($con,"delete  from customervehical where cust_id = '$id'");
  
 mysqli_query($con,"DELETE FROM Customer WHERE cust_id = '$id'");
   mysqli_query($con,"DELETE FROM customerlogin WHERE cust_id = '$id'");  
     mysqli_query($con,"Drop table  `".$uname."`"); 
	 mysqli_close($con);
	
	
}
 


 
 
 
?>
  

 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<head>
<title>Drivers</title>
 <link href="css/Hotetprocss.css" type="text/css"    rel="stylesheet" />
 <link href="css/HotelproCss2.css" type="text/css"    rel="stylesheet" />
 <link href="css/toform.css" type="text/css"    rel="stylesheet" />
</head>


<div class="bg-content">
<div>
<p class="one">
<body>
<form action="<?php $_PHP_SELF ?>"  method="post">
  <body>
      <div class="login">
          <link rel="stylesheet" href="log.css" />
    <input type="text" placeholder="Customer ID" required name="id" id="username">  
    <input type="password" placeholder=password required name="fname"id="password">  
  <a href="CusAdmin.php" class="forgot">Forgot Customer ID?</a>
  <input type="submit" name="vid" value="Add">
   <div class="shadow"></div>
</div>


    </body>
</form>
</p>
   <h3><font color="black">Delete Customer Details</font></h3> </div>
</div>
<head>  <title>U</title>
 
<title>sing External CSS</title>  
<link href="css/driverto.css" type="text/css"    rel="stylesheet" />
<form action="<?php $_PHP_SELF ?>"  method="post">
 <div class="login">
          <link rel="stylesheet" href="log.css" />
    <input type="text" placeholder="Customer ID" required name="did" id="username">  
     
  <a href="CusAdmin.php" class="forgot">Forgot Customer ID?</a>
  <input type="submit" name="delecus" value="Delete">
   
</div>

</form>
 
</body>


</html>