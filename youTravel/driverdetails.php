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
             
             
          </div>
          


  

           <h1><font color="red"> Drivers Details</font></h1> </div>
      </div>
        </div>
  </div>

    <div>
        
     
    </div>

</html>


  

<?php
   
 $file="../YouTravel/variable.txt";
   $document=file_get_contents($file);
   $a=(int)$document;
 $fname=$a;
     
$con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
 
mysqli_select_db( $con,"project");
  
  
$path=mysqli_query($con,"SELECT image FROM images where dri_id='$fname'");
 $path1=mysqli_fetch_array($path);
 $path2=$path1[0];
    
 echo  '<img src="images/'.$path2.'" height="200" width="200" align="center" border="1"/>';

    
 
$result = mysqli_query($con,"SELECT * FROM Driver where dri_id='$fname'");
$pr=mysqli_query($con,"SELECT vehical_id FROM Driver where dri_id='$fname'");
$a=  mysqli_fetch_array($pr);
 $b=$a['vehical_id'];
$result1=mysqli_query($con,"SELECT * FROM Vehical where vehical_id='$b'");



echo "<table border='0' align=center>

<tr>
	<th> 
	Driver ID
	</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Vehical ID</th>

</tr>";


while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['dri_id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['vehical_id'] . "</td>";
echo "</tr>";
}
echo "</table>";
 ?>
 <h1><font color="red">Vehical Details</font></h1> </div>
 <?php
 
 
 
echo "<table border='0' align=center color=red bgcolor=#9F7060 bordercolor=red>
<tr>
<th>Vehical ID</th>
 
<th>Remain Seat</th>
<th>Vehical Type</th>

</tr>";


while($row = mysqli_fetch_array($result1))
{
echo "<tr>";
echo "<td>" . $row['vehical_id'] . "</td>";
echo "<td>" . $row['numofRseat'] . "</td>";
echo "<td>" . $row['vehicaltype'] . "</td>";
echo "</tr>";
}
echo "</table>";


mysqli_close($con);
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

</body>
    

</html>