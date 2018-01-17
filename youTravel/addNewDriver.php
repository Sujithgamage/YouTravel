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
<script>
    function submitFunction(){
        var x=document.forms["myForm"]["id"].value;
        var y=document.forms["myForm"]["nam"].value;
        var z=document.forms["myForm"]["email"].value;
        var a=document.forms["myForm"]["phone"].value;
        var b=document.forms["myForm"]["fname"].value;
        
        if(x==null||x==""){
            alert("Something Empty!!");
        }
        else{
            
        }
    }
 </script>
	<body>
    <div class="spinner"></div> 
<!-- header start -->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="index.html"><img alt="" src="img/logo.png"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li ><a href="Rad_Details/index.php">Home</a></li>
                <li class="active"><a>Drivers</a>
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
                <li><a>Customers</a>
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

          <h3>  Add New Driver</font></h3> </div>
         
         <?php

if(isset($_POST['adde'])){

 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
mysqli_select_db( $con,"project");
  
 $id=$_POST['id'];
  $name=$_POST['nam'];
  $mail=$_POST['email'];
  $phone=$_POST['phone'];
  $vid=$_POST['fname'];
  mysqli_query($con,"Insert into  Driver values ('$id','$name','$mail','$phone','$vid')");
    
	 mysqli_close($con);
	
	
}


if(isset($_POST['update'])){

 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
mysqli_select_db( $con,"project");
  
 $id=$_POST['id'];
  $fname=$_POST['fname'];
  
  mysqli_query($con,"UPDATE  Driver SET  vehical_id='$fname' WHERE  dri_id='$id' ");
    
	 mysqli_close($con);
	
	
}
if(isset($_POST['seatUpdate'])){

 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
mysqli_select_db( $con,"project");
  
 
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  
  mysqli_query($con,"UPDATE  Vehical SET  numofRseat='$lname' WHERE  vehical_id='$fname' ");
    
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
  <link href="log.css" type="text/css"    rel="stylesheet" />
 <link href="css/toform.css" type="text/css"    rel="stylesheet" />
</head>


<div class="bg-content">
<div>
<p class="one">
<body>
    <form name ="myForm" action="<?php $_PHP_SELF ?>"  method="post" onsubmit="submitFunction()">
  <input type="text" id = "driver" required name="id"  placeholder="Driver ID"  ><br><br>
  
  <input type="text" id = "driver" required name="nam"  placeholder="Driver Name"  ><br><br>
  <input type="text"  id = "driver" required name="email"  placeholder="Driver Email"  ><br><br>
  <input type="text" length="10" id = "driver" required name="phone"  placeholder="Driver Phone"  >
  <br><br>
  <input type="text"  id = "driver" required name="fname" placeholder="Vehical ID" >
   
  <br>
  <br>
   
<input type="submit" id="driver" onclick="return checkForm()" border="1" required  name="adde" value="Add New Driver">
</p>
</div>
    
    <script language ="javascript">
			function checkForm(){
                            
				var dri = document.myForm.id.value;
				 
                            var emailad=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                              var address=document.myForm.email.value;  
				 var mobile1=document.myForm.phone.value;
				 	
				 
				
				 
					if(mobile1.length !=10){
					alert("Invalid Mobile number");
					return false;
					}
                                        
                                         if(emailad.test(address)==false){
                                        alert("Invalid Email Address");
                                        return false;
                                            }
                                    else if(dri.length!=6){
                                         alert("Invalid Driver Id");
                                        return false;
                                    }
                                       
                   else{
						return true;
					}
				
			}
			</script> 
 
<head>  <title>U</title>
 
<title>sing External CSS</title>  
<link href="css/driverto.css" type="text/css"    rel="stylesheet" />
 
</head>

</form>
    
</body>

 <?php
        // put your code here
  $msg="";
  if(isset($_POST['upload'])){
      $ab=$_FILES['image']['name'];
      $target="YouTravel/images/".basename($_FILES['image']['name']);
      
      $db=mysqli_connect("localhost","root","","project");
      $image=$_FILES['image']['name'];
      
      $text=$_POST['text'];
      
      $sql="Insert into images (image,dri_id) values ('$image','$text')";
      mysqli_query($db,$sql);
      
      if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
          $msg="Image uploaded successfully";
      }else{
          $msg="There was a problem uploading image";
      }
      
       
  }
  
        ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <h3>Upload Image for Driver</h3>
        <meta charset="UTF-8">
        <title>Image Upload</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
    <body>
        <div id="content">
            <form method="post" action="addNewDriver.php" enctype="multipart/form-data">
             <div>
                <input typt="text" required name="text"  id ="driver" placeholder="Driver ID">
            </div>
                <input type="hidden" required  name="size" id = "driver" value="1000000"><br>
            <div>
                <input type="file" name="image"> <br>
                
            </div>
            
            <div>
              <br>  <input type="submit" id = "driver" name="upload" value="upload image">
            </div>
        </form>
        </div>
      
    </body>
</html>

</html>