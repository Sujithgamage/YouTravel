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
            <h1 class="brand brand_"><a href=""><img alt=""    src="images/logo.png"> </a></h1>
             <h1 class="brand brand_"><a href=""><img alt=""    src="images/inArow.jpg"> </a></h1>
             
          </div>
          


  

           <h1><font color="red"><i> Drivers Details</font></h1> </div>
      </div>
        </div>
  </div>

    <div>
        
     
    </div>

<table>
  <tbody>
    <tr>
      <th scope="col">&nbsp;
        <?php
       static $perdri; 
	    
$dri_id1="";
$password="";
$fname="";
   if(isset($_POST['log'])){ 
 $fname=$_POST['fname'];
 $perdri=$fname;
   }
   if($fname==null){
      $fname=$_POST['dri_id1'];
       
   }

$con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
 
mysqli_select_db( $con,"project");
  
$dname=mysqli_query($con,"SELECT name FROM driver where dri_id='$fname'");
$id=mysqli_query($con,"SELECT dri_id FROM driver where dri_id='$fname'");
$vehicalId=mysqli_query($con,"SELECT vehical_id FROM driver where dri_id='$fname'");
 
$dname1=mysqli_fetch_array($dname);
$id1=mysqli_fetch_array($id);
$vehicalId1=mysqli_fetch_array($vehicalId);

 $dname2=$dname1[0];
 $id2=$id1[0];
 $vehicalId2=$vehicalId1[0];
 
 
   
 echo "Driver Name : ".$dname2.'<br>';
  
 echo "Driver ID : ".$id2.'<br>';
   
 echo "Vehical ID : ". $vehicalId2;      
		?>
        
      </th>
       <th scope="col">&nbsp;
     <?php
        
		   
$dri_id1="";
$password="";
$fname="";
   if(isset($_POST['log'])){ 
 $fname=$_POST['fname'];
   }
   if($fname==null){
       $fname=$_POST['dri_id1'];     
   }

$con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
 
mysqli_select_db( $con,"project");
  
$dname=mysqli_query($con,"SELECT phone FROM driver where dri_id='$fname'");
$email=mysqli_query($con,"SELECT email FROM driver where dri_id='$fname'");
 $seat=mysqli_query($con,"SELECT numofRseat FROM vehical where vehical_id='$vehicalId2'");
 
$dname1=mysqli_fetch_array($dname);
$email1=mysqli_fetch_array($email);
$seat1=mysqli_fetch_array($seat);

 $dname2=$dname1[0];
 $email2=$email1[0];
 $seat2=$seat1[0];
 echo "Mobile Phone : ".$dname2.'<br><span id="tab1">';
  
 echo "Address : ".$email2.'<br>';
 echo "Remain Seat : ". $seat2;      
		?>    </th>
      <th scope="col">&nbsp;
       
           
           <?php
   
$dri_id1="";
$password="";
$fname="";
   if(isset($_POST['log'])){ 
 $fname=$_POST['fname'];
   }
   if($fname==null){
       $fname=$_POST['dri_id1'];       
   }
$con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
 
mysqli_select_db( $con,"project");
  
$path=mysqli_query($con,"SELECT image FROM images where dri_id='$fname'");
 

// Mysql_num_row is counting table row

$result = mysqli_query($con,"SELECT * FROM Driver where dri_id='$fname'");
$count=mysqli_num_rows($result);

  if($count!=1){ 
          $fname=$_POST['dri_id1'];
           echo "<script>alert('Invalid Driver ID')</script>";
           
            $file="./invalidDriverId.txt";
   $document=file_get_contents($file);
   echo $document;
  }
$path1=mysqli_fetch_array($path);
 $path2=$path1[0];
    
 echo  '<img src="images/'.$path2.'" height="200" width="200" align="center" border="1"/>';

    
 
$result = mysqli_query($con,"SELECT * FROM Driver where dri_id='$fname'");
$result3 = mysqli_query($con,"SELECT * FROM Driverlogin where dri_id='$fname'");

$pr=mysqli_query($con,"SELECT vehical_id FROM Driver where dri_id='$fname'");
$a=  mysqli_fetch_array($pr);
 $b=$a['vehical_id'];
 
$result1=mysqli_query($con,"SELECT * FROM Vehical where vehical_id='$b'");

$result5=mysqli_query($con,"select cust_id,phone,email from customer where cust_id iN(select cust_id from customervehical where vehical_id='$b')");

$result7=mysqli_query($con,"SELECT * FROM  customervehical where vehical_id='$b'");
$result6=mysqli_query($con,"SELECT selecttour.cust_id,tour.* FROM selecttour,tour where selecttour.tour_id=tour.tour_id");

  
 
 
?>

      </th>
    </tr>
  </tbody>
</table>



  


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


  
		<?php
		 
		 
             

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
            
  
  mysqli_query($con,"Insert into  driverlogin  values ('$dri_id1','$name1') ");
    
	 mysqli_close($con);
	
	
}

if(isset($_POST['deletelog'])){

 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
mysqli_select_db( $con,"project");
  
   $dri_id1=$_POST['dri_id1'];
         
            
  
  mysqli_query($con,"DELETE  from  driverlogin  WHERE  dri_id='$dri_id1' ");
    
	 mysqli_close($con);
	
	
}

if(isset($_POST['updateseat'])){
$seatof=$_POST['seatof'];
 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
mysqli_select_db( $con,"project");
  
   $dri_id1=$_POST['dri_id1'];
         
      $pr1=mysqli_query($con,"SELECT vehical_id FROM Driver where dri_id='$dri_id1'");
$a1=  mysqli_fetch_array($pr1);
 $b1=$a1['vehical_id'];
$result1=mysqli_query($con,"update Vehical set  numofRseat='$seatof'  where vehical_id='$b1'");
    
	 mysqli_close($con);
	
	
}
$conection = mysqli_connect("localhost","root",""); 
if (!$conection)   {  
 die('Could not connect: ' . mysql_error()); 
   } 


     if(isset($_POST['logout'])){
      ob_start();
   mysqli_select_db( $conection,"project");
$ccid=$_POST['dri_id1'];
$customerId="SELECT * FROM driverlogin WHERE dri_id='$ccid'";
$resultfor=mysqli_query($conection,$customerId);

// Mysql_num_row is counting table row
$countfor=mysqli_num_rows($resultfor);
if($countfor==1){
      
            $_SESSION['loggedout']=true;
           // echo "<script>window.open('../CustomerInterface/index.php')</script>";
            header("location:../CustomerInterface/index.php");
}

             
            
        else{
            echo "<script>alert('Invalid username or password')</script>";
        }
         
    



ob_end_flush();


       }
                
                ?>
                    </tbody>
		<tfoot>
			 
		</tfoot>
	</table>
</body>

<body>
	 <h2><font color="black">My Customer Details</font></h2> </div>
<link href="css/buton.css" type="text/css" rel="stylesheet" />
	<table class="data-table">
		<caption class="title"> </caption>
		<thead>
			<tr>
				<th>Customer ID</th>
				<th>Phone</th>
				<th>Email</th>
				 
				 
				 
			</tr>
		</thead>
		<tbody>
		<?php
		 
		while ($row = mysqli_fetch_array($result5))
		{
			 
			echo '<tr>
					<td>'.$row['cust_id'].'</td>
					<td>'.$row['phone'].'</td>
					<td>'.$row['email'].'</td>
					 
					 
				</tr>';
		
                        
                        
			 
		}
                ?>
  		</tbody>
		<tfoot>
			 
		</tfoot>
	</table>
</body>


<body>
	 <h2><font color="black">My Customer Vehicle Details</font></h2> </div>
<link href="css/buton.css" type="text/css" rel="stylesheet" />
	<table class="data-table">
		<caption class="title"> </caption>
		<thead>
			<tr>
				<th>Customer ID</th>
				  <th>Vehicle ID</th>
				
				<th>Vehicle Type</th>
                               <th>Seat</th>
				 
				 
			</tr>
		</thead>
		<tbody>
		<?php
		 
		while ($row = mysqli_fetch_array($result7))
		{
			 
			echo '<tr>
					<td>'.$row['cust_id'].'</td>
					 <td>'.$row['vehical_id'].'</td> 
					<td>'.$row['vehicaltype'].'</td>
					<td>'.$row['numofseat'].'</td>
					
                                       
					 
					 
				</tr>';
		
                        
                        
			 
		}
                ?>
  		</tbody>
		<tfoot>
			 
		</tfoot>
	</table>
</body>



<body>
    <h2><font color="black">Tour  Details</font></h2> </div>
<link href="css/buton.css" type="text/css" rel="stylesheet" />
	<table class="data-table">
		<caption class="title"> </caption>
		<thead>
			<tr>
				<th>Customer ID</th>
				<th>Tour ID</th>
				 
				<th>Start</th>
				<th>Destination</th>
                                <th>Date</th>
				 <th>Time</th>
				 
			</tr>
		</thead>
		<tbody>
		<?php
		 
		while ($row = mysqli_fetch_array($result6))
		{
			 
			echo '<tr>
					<td>'.$row['cust_id'].'</td>
					<td>'.$row['tour_id'].'</td>
					<td>'.$row['start'].'</td>
					<td>'.$row['destination'].'</td>
					<td>'.$row['dateof'].'</td>
                                        <td>'.$row['bigintime'].'</td> 
					 
					 
				</tr>';
		
                        
                        
			 
		}
                
                
                ?>
  		</tbody>
		<tfoot>
			 
		</tfoot>
	</table>
</body>


 
		 
                    
                    
                    
                    
  		</tbody>
		<tfoot>
			 
		</tfoot>
	</table>
</body>

<h3><font color="black">Edit Login Details</font></h3> </div>
     <body>
          
 
        <form  method="post">
            <input type="text"  id="driver" required name="dri_id1"   placeholder="Driver Id" Value="<?php echo $dri_id1;?>" ><br><br>
            <input type="text"  name="password" id="driver"   placeholder="Password" Value="<?php echo $password;?>"><br><br>
              <input type="text" name="seatof" id="driver"   placeholder="Reamain Seat" ><br><br>
             <div>
                  
                 <input type="submit" class="action-button shadow animate red" id="driver" name="updatelog" value="Update"> 
                   
                   <input type="submit" id="driver" name="updateseat" value="Update Seat" class="action-button shadow animate green">
                   <input type="submit" id="driver" name="searchlog" value="find" class="action-button shadow animate yellow">
                   <input type="submit" id="driver" name="logout" value="Log Out" class="action-button shadow animate blue">
             </div>
        </form>
    
    
         
    
    <form <iframe action="http://maps.google.com/maps" width="400" height="300" frameborder="0" style="border:0"   method="get" target="_blank"</iframe>
        <h2>Your Customer Location:<h2><br>
                <input type="text" id="driver" required name="saddr" />
<input type="text" id="driver" name="daddr" value="My Location" />
<input type="submit" class="action-button shadow animate blue" value="get directions" />
</form>
         
           </body> 
            
           <form  method="post" action="../MessengerDriver/chat.php" name="form2">
                <input type="text"  id="driver" required name="usertable"   placeholder="Driver Id" ><br><br>
                <input type="submit" id="driver" onclick="return checkForm2()" name="chatroom" value="Chat Box" class="action-button shadow animate blue">
           </form>
           
           <script language ="javascript">
			function checkForm2(){
                            
				var mobile1 = document.form2.usertable.value;
				  
				  
				
				 
					if(((mobile1.length==6))){
					
					return true;
					}
                                       
                                     
                   else{  
                                            alert("Invalid ID number");
						return false;
					}
				
			}
			</script> 
 
</html>