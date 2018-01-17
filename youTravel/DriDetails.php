 


  

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
		FROM driver';
	

$query = mysqli_query($conn, $sql);

if (!$query) {
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
 
	 
	<table class="data-table">
		<caption class="title"> </caption>
		<thead>
			<tr>
				<th>Driver ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Vehicle ID</th>
			</tr>
		</thead>
		<tbody>
		<?php
		 
		while ($row = mysqli_fetch_array($query))
		{
			 
			echo '<tr>
					<td>'.$row['dri_id'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['phone'].'</td>
					<td>'.$row['vehical_id'].'</td>
				</tr>';
			 
			 
		}?>
		</tbody>
		<tfoot>
			 
		</tfoot>
	</table>
 


><!doctype html>
<html>
<head>
<meta charset="utf-8">
<head>
<title>Drivers</title>
 
 <link href="css/HotelproCss2.css" type="text/css"    rel="stylesheet" />
 
</head>


<div>
<p class="one">
    <h1><font color="red"> More Details</font></h1> </div>
<body>
    
    
    <body>
      <div class="login">
          
          <link rel="stylesheet" href="log.css" />
           <form   method="post" action="DrimoreDetails.php" name="form1">
    <input type="text" placeholder="Driver ID" id="username" required name="fname">  
   
  <input type="submit" onclick="return checkForm()" name="delecus" value="Search"/>
  </form>
</div>
<div class="shadow"></div>

<script language ="javascript">
			function checkForm(){
                            
				var mobile1 = document.form1.fname.value;
				 
				 
				 
					if(mobile1.length==6){
					
					return true;
					}
                                       
                                     
                   else{  
                                            alert("Invalid ID number");
						return false;
					}
				
			}
			</script> 

    </body>

    
    <?php
    if(isset($_POST['log'])){
ob_start();
 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
 
mysqli_select_db( $con,"project");
$username=$_POST['fname']; 
 


// To protect MySQL injection (more detail about MySQL injection)
 

$sql="SELECT * FROM driverlogin WHERE dri_id='$username' ";
$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row


    

 

 if(isset($_SESSION['loggedin']) ==true){
     
        header ("refresh:1;url=DrimoreDetails.php");
    }
    if(isset($_POST['fname'])){
        if ($count==1) {
            $_SESSION['loggedin']=true;
            header ("refresh:1;url=DrimoreDetails.php");
        }
        else{
           echo "<script>alert('Invalid Driver ID')</script>";
        }
    }



ob_end_flush();
}

?>
    
    <div class="bg-content">
<div>
<p class="one">
<body>

</body>
    

</html>