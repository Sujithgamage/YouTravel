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

	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!-->
	<!--<![endif]-->
	<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <![endif]-->
  
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
            <h1 class="brand brand_"><a href="index.html"><img alt="" src="img/logo.png"> </a></h1>
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
                
                <li class="active"><a>Vehicle</a>
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
                    <li><a href="CustomDetails.php"> Add Tour</a></li>
                  </ul>
                    </li>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
 
    </header>

          <h3><font color="black">Edit Vehicle Details</font></h3> </div>

<?php


$vehical_id="";
$numofRseat="";
$vehicaltype="";

function getPosts(){
  
    $posts=array();
    $posts[0]=$_POST['vehical_id'];
    $posts[1]=$_POST['numofRseat'];
    $posts[2]=$_POST['vehicaltype'];
    return $posts;
    
}
if(isset($_POST['search'])){
    
    
    $host="localhost";
$user="root";
$password="";
$database="project";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try{
    $connect=  mysqli_connect($host, $user, $password, $database);
} catch (Exception $ex) {
    echo '$ex';
}
    $data=  getPosts();
    
    $search_Query="SELECT * FROM vehical WHERE vehical_id='$data[0]' ";
$search_Result= mysqli_query($connect, $search_Query);

if($search_Result){
    if(mysqli_num_rows($search_Result)){
        while($row=  mysqli_fetch_array($search_Result)){
            $vehical_id=$row['vehical_id'];
         
            $numofRseat=$row['numofRseat'];
            $vehicaltype=$row['vehicaltype'];
        }
        
    }
    else{
        echo 'No data for this ID';   
        }
}
else{
        echo 'RESULT ERROR';    
        }
    
}
if(isset($_POST['delete'])){

 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
mysqli_select_db( $con,"project");
  
   $vehical_id=$_POST['vehical_id'];
     
  mysqli_query($con,"Delete  from Driver WHERE  vehical_id='$vehical_id' ");   
  mysqli_query($con,"Delete  from Customer WHERE  vehical_id='$vehical_id' ");      
  mysqli_query($con,"Delete  from customervehical WHERE  vehical_id='$vehical_id' ");
  mysqli_query($con,"Delete  from Vehical WHERE  vehical_id='$vehical_id' ");
   
	 mysqli_close($con);
	
	
}

if(isset($_POST['update'])){

 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
mysqli_select_db( $con,"project");
  
   $vehical_id=$_POST['vehical_id'];
         
            $numofRseat=$_POST['numofRseat'];
            $vehicaltype=$_POST['vehicaltype'];
  
  mysqli_query($con,"UPDATE  Vehical SET  numofRseat='$numofRseat',vehicaltype='$vehicaltype' WHERE  vehical_id='$vehical_id' ");
    
	 mysqli_close($con);
	
	
}

if(isset($_POST['insert'])){

 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
mysqli_select_db( $con,"project");
  
            $vehical_id=$_POST['vehical_id'];
         
            $numofRseat=$_POST['numofRseat'];
            $vehicaltype=$_POST['vehicaltype'];
         
            
  
  mysqli_query($con,"Insert into  Vehical  values ('$vehical_id','$numofRseat','$vehicaltype') ");
    
	 mysqli_close($con);
	
	
}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<head>
<title>Vehicle</title>
 <link href="css/Hotetprocss.css" type="text/css"    rel="stylesheet" />
 <link href="css/HotelproCss2.css" type="text/css"    rel="stylesheet" />
 <link href="css/toform.css" type="text/css"    rel="stylesheet" />
 <link href="css/buton.css" type="text/css"    rel="stylesheet" />
</head>


<div class="bg-content">
<div>
<p class="one">
    <body>
        <form action="editVehical.php" method="post">
            <input type="text" required name="vehical_id" placeholder="Vehicle Id" id ="driver" Value="<?php echo $vehical_id;?>" ><br><br>
            
            <input type="int" name="numofRseat" placeholder="Seat" id = "driver" Value="<?php echo $numofRseat;?>"><br><br>
             <input type="text" name="vehicaltype" id = "driver" placeholder="Vehicle Type" Value="<?php echo $vehicaltype;?>"><br><br>
             <div>
                
                 <input type="submit" id="driver" name="insert" value="Add" class="action-button shadow animate blue">
                 <input type="submit" id="driver" name="update" value="Update" class="action-button shadow animate red"> 
                  <input type="submit" id="driver" name="delete" value="Delete" class="action-button shadow animate green">
                  <input type="submit" id="driver2" name="search" value="find" class="action-button shadow animate yellow">
                  <br><br>
             </div>
        </form>
    </body>
</html>
