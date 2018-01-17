<html>
<head>
<style>
 
</style>
</head>


<div>
 
</head>
  
</div>

<div class="container">
          





 <div class="container clearfix" >
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href=""><img alt=""    src="img/logo.png"> </a></h1>
            <h1 class="brand brand_"><a ><img alt="" src="img/InARow.jpg"> </a></h1>
              
             
          </div>
          </html>


  

<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'project'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'select * from tour where dateof>now()';

	$sql2 = 'SELECT * 
		FROM selecttour';	
$query = mysqli_query($conn, $sql);
$query2 = mysqli_query($conn, $sql2);
if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
if (!$query2) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
   
		
	</style>
</head>
  

<!doctype html>
<html>
<head>
<h2><b>Tourist Locations Around Vila Green Inn</b></h2><br />  
<meta charset="utf-8">
<head>
<title>Customer Map</title>
 <link href="css/Hotetprocss.css" type="text/css"    rel="stylesheet" />
 <link href="css/HotelproCss2.css" type="text/css"    rel="stylesheet" />
 <link href="css/toform.css" type="text/css"    rel="stylesheet" />
</head>
 

  			    
      <iframe src="https://www.google.com/maps/d/embed?mid=1emJMxnxzdGjC5ut1TF8sYl2FEqQ" width="840" height="680"></iframe>  

</html 


     

 