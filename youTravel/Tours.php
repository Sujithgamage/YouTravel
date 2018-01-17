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
          


  

           <h1><font color="red">Tour Details</font></h1> </div>
      </div>
        </div>
  </div>

    <div>
        
     
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

$sql = 'SELECT * 
		FROM Tour';

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
<html>
<head>
	<title>Displaying   Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
                         
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 16px;
                         text-align:left;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 30px;
		}

		table td {
			transition: all .5s;
                         text-align:left;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 637px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
                        text-align:left;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	 
	<table class="data-table">
		<caption class="title"> </caption>
		<thead>
			<tr>
				<th>Tour ID</th>
				<th>Start</th>
				<th>Destination</th>
				<th>Date</th>
				<th>Bigging Time</th>
                                 
			</tr>
		</thead>
		<tbody>
		<?php
		 
		while ($row = mysqli_fetch_array($query))
		{
			 
			echo '<tr>
					<td>'.$row['tour_id'].'</td>
					<td>'.$row['start'].'</td>
					<td>'.$row['destination'].'</td>
					<td>'.$row['dateof'].'</td>
					<td>'.$row['bigintime'].'</td>
                                          
				</tr>';
			 
			 
		}?>
		</tbody>
		<tfoot>
			 
		</tfoot>
	</table>
</body>
<?php

if(isset($_POST['delecus'])){

 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
mysqli_select_db( $con,"project");
  
 $id=$_POST['fname'];
   



  mysqli_query($con,"delete  from tour where tour_id = '$id'");
  
   
   
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
<body>
	 <h1><font color="red">More Details</font></h1> </div>
	<table class="data-table">
		<caption class="title"> </caption>
		<thead>
			<tr>
				<th>Customer ID</th>
				<th>Tour ID</th>
				 
				 
			</tr>
		</thead>
		<tbody>
		<?php
		 
		while ($row = mysqli_fetch_array($query2))
		{
			 
			echo '<tr>
					<td>'.$row['cust_id'].'</td>
					<td>'.$row['tour_id'].'</td>
					 
					 
				</tr>';
			 
			 
		}
                
                
                
                ?>
		</tbody>
		<tfoot>
			 
		</tfoot>
	</table>
</body>
<div>
<p class="one">
    <h2><font color="black">Delete Tour</font></h2> </div>
<body>
    
    
    <body>
      <div class="login">
          
          <link rel="stylesheet" href="log.css" />
           <form   method="post" action="Tours.php">
    <input type="text" placeholder="Tour ID" id="username" name="fname">  
   
  <input type="submit" name="delecus" value="Delete"/>
  </form>
</div>
<div class="shadow"></div>

    </body>
</html 


     

 