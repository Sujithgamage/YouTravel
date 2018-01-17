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

          <h3><font color="black">Edit Drivers Details</font></h3> </div>

<?php


$dri_id="";
$name="";
$email="";
$phone="";
$vehical_id="";
function getPosts(){
  
    $posts=array();
    $posts[0]=$_POST['dri_id'];
    $posts[1]=$_POST['name'];
    $posts[2]=$_POST['email'];
    $posts[3]=$_POST['phone'];
    $posts[4]=$_POST['vehical_id'];
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
    
    $search_Query="SELECT * FROM driver WHERE dri_id='$data[0]' ";
$search_Result= mysqli_query($connect, $search_Query);

if($search_Result){
    if(mysqli_num_rows($search_Result)){
        while($row=  mysqli_fetch_array($search_Result)){
            $dri_id=$row['dri_id'];
            $name=$row['name'];
            $email=$row['email'];
            $phone=$row['phone'];
            $vehical_id=$row['vehical_id'];
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
if(isset($_POST['update'])){

 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
mysqli_select_db( $con,"project");
  
            $dri_id=$_POST['dri_id'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $vehical_id=$_POST['vehical_id'];
  
  mysqli_query($con,"UPDATE  Driver SET  name='$name',email='$email',phone='$phone',vehical_id='$vehical_id' WHERE  dri_id='$dri_id' ");
    
	 mysqli_close($con);
	
	
}

if(isset($_POST['insert'])){

 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
mysqli_select_db( $con,"project");
   

            $dri_id1=$_POST['dri_id'];
            $name1=$_POST['name'];
            $email1=$_POST['email'];
            $phone1=$_POST['phone'];
            $vehical_id1=$_POST['vehical_id'];
      mysqli_query($con,"Insert into  Driver  values ('$dri_id1','$name1','$email1','$phone1','$vehical_id1') ");
	 mysqli_close($con);
	
	
}

if(isset($_POST['delete'])){

 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
mysqli_select_db( $con,"project");
  
   $dri_id1=$_POST['dri_id'];
            $uname="b"."$dri_id1";
 
       
         
    
    mysqli_query($con,"DELETE from  images  WHERE  dri_id='$dri_id1' ");      
     mysqli_query($con,"DELETE from  Driver  WHERE  dri_id='$dri_id1' ");
    mysqli_query($con,"DELETE from  driverlogin  WHERE  dri_id='$dri_id1' ");
   
    mysqli_query($con,"Drop table  `".$uname."`"); 
	 mysqli_close($con);
	
	
}


$dri_id1="";
$password="";

function getPosts1(){
  
    $posts=array();
    $posts[0]=$_POST['dri_id1'];
    $posts[1]=$_POST['password'];
     
    return $posts;
    
}

if(isset($_POST['searchlog'])){
    
    
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
    $data=  getPosts1();
    
    $search_Query="SELECT * FROM driverlogin WHERE dri_id='$data[0]' ";
$search_Result= mysqli_query($connect, $search_Query);

if($search_Result){
    if(mysqli_num_rows($search_Result)){
        while($row=  mysqli_fetch_array($search_Result)){
            $dri_id1=$row['dri_id'];
            $password=$row['password'];
            
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

if(isset($_POST['updatelog'])){

 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
mysqli_select_db( $con,"project");
  
            $dri_id1=$_POST['dri_id1'];
            $password=$_POST['password'];
            
  
  mysqli_query($con,"UPDATE  driverlogin SET  password='$password'  WHERE  dri_id='$dri_id1' ");
    
	 mysqli_close($con);
	
	
}

if(isset($_POST['insertlog'])){

 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
mysqli_select_db( $con,"project");
  
            $dri_id1=$_POST['dri_id1'];
            $name1=$_POST['password'];
           
          $uname="b"."$dri_id1";
 
     mysqli_query($con,"create table `".$uname."` (sender varchar(100),message varchar(1000)) ");  
    
  mysqli_query($con,"Insert into  driverlogin  values ('$dri_id1','$name1') ");
 	 mysqli_close($con);
	
	
}

 



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<head>
<title>Drivers</title>
 <link href="css/Hotetprocss.css" type="text/css" rel="stylesheet" />
 <link href="css/HotelproCss2.css" type="text/css" rel="stylesheet" />
 <link href="css/toform.css" type="text/css" rel="stylesheet" />
 <link href="css/buton.css" type="text/css" rel="stylesheet" />
 
</head>


<div class="bg-content">
<div>
<p class="one">
    <body>
        <form action="EditDrivers.php" method="post">
            <input type="text"  id="driver" required name="dri_id"   placeholder="Driver Id" Value="<?php echo $dri_id;?>" ><br><br>
             <input type="text"  name="name" id="driver"   placeholder="Name" Value="<?php echo $name;?>"><br><br>
             <input type="text" name="email" id="driver"   placeholder="Email" Value="<?php echo $email;?>"><br><br>
              <input type="text" name="phone" id="driver"   placeholder="Phone" Value="<?php echo $phone;?>"><br><br>
              <input type="text" name="vehical_id" id="driver"   placeholder="Vehical ID" Value="<?php echo $vehical_id;?>"><br><br>
             <div>
                <input type="submit" class="action-button shadow animate blue" id="driver" name="insert" value="Add"> 
                 <input type="submit" class="action-button shadow animate red" id="driver" name="update" value="Update"> 
                  <input type="submit" id="driver" name="delete" value="Delete" class="action-button shadow animate green"> 
                   <input type="submit" id="driver" name="search" value="find" class="action-button shadow animate yellow"><br><br>
             </div>
        </form>
    </body>
    <h3><font color="black">Edit Login Details</font></h3> </div>
     <body>
        <form action="EditDrivers.php" method="post">
            <input type="text"  id="driver" required name="dri_id1"   placeholder="Driver Id" Value="<?php echo $dri_id1;?>" ><br><br>
             <input type="text" name="password" id="driver"   placeholder="Password" Value="<?php echo $password;?>"><br><br>
             
             <div>
                <input type="submit" class="action-button shadow animate blue" id="driver" name="insertlog" value="Add"> 
                 <input type="submit" class="action-button shadow animate red" id="driver" name="updatelog" value="Update"> 
                 
                   <input type="submit" id="driver" name="searchlog" value="find" class="action-button shadow animate yellow"><br><br>
             </div>
        </form>
    </body>
</html>
