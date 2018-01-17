<!doctype html>
<html>
<div class="container">
            <h1 class="brand brand_"><a ><img alt="" src="img/logo.png"> </a></h1>
<head>
<meta charset="utf-8">
<title>Customer Fill</title>
  <link href="css/HotetprocssC.css" type="text/css"    rel="stylesheet" /> 
<link href="css/toform.css" type="text/css"    rel="stylesheet" />
<link href="css/detailsbeut.css" type="text/css"    rel="stylesheet" />
<link href="css/HotelproCss2.css" type="text/css"    rel="stylesheet" />
</head>
 
  <h1 class="brand brand_"><a ><img alt="" src="img/InARow.jpg"> </a></h1>
<h1>Please Enter Your Details <br>

</h1>
  

<body>
 <label for="date"></label>
 <img src="img/tax.png" width="144" height="128" alt=""/>
 
 <form action="<?php $_PHP_SELF ?>" method="POST" name="form1">
   
  <fieldset><b> <img src="img/marker-icon.png"   width="25" height="41" alt=""/> Starting Point </b><input type="text" required  name="start" /><br><br>
  <b><img src="img/marker-icon.png" width="25" height="41" alt=""/> Ending Point  </b>
  <input type="text" required  name="destination"  /> <br>
  <br>
 <b>Required Seats 
 <input type="int"  required name="noofseat"/>
 </b> 
 <b>Customer ID</b>
 <input type="text" required   name="cust_id"
 />
 <p><b>Required Vehicle Type </b><br />  
   <input type="radio" required name="q1" value="Van"       /> Van 
   <input type="radio" required name="q1" value="Car" />     Car   
     <input type="radio" required name="q1" value="Tuk" />     Tuk Tuk </p> 
   
    
  <fieldset> <legend><i><b>Other Details </b></i></legend> <label><br /> 
    <b>
     
   Begin Time:
    <input type="time" required  name="time" >    
    Email:    </b>
    <input type="text" required  name="email" /></label>
    <b>Mobile:</b>
    <input type="text"  required name="mobile" />
     Date
    <input type="date"  required name="date" id="date">
    
    <br /> <label><br /></label> </fieldset> 
  
  </fieldset>
  
  <input type="submit" id="driver" onclick="return checkForm()" class="action-button shadow animate green" id="customer" value= "Place It" size="15" />
 </form>
 <link href="css/buton.css" type="text/css" rel="stylesheet" />
 
  
 <script language ="javascript">
			function checkForm(){
                            
				var mobile1 = document.form1.mobile.value;
				 var seat1 = document.form1.noofseat.value;
                            var emailad=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                              var address=document.form1.email.value;  
				 
				var id=document.form1.cust_id.value; 	
				 
				
				 
					if(mobile1.length !=10){
					alert("Invalid Mobile number");
					return false;
					}
                                       if((seat1<=0)||(seat1>8)){
                                            alert("Invalid required seat");
					return false;
                                        }
                                        else if(emailad.test(address)==false){
                                        alert("Invalid Email Address");
                                        return false;
                                            }
                                    else if(id.length>8){
                                         alert("Invalid Customer Id");
                                        return false;
                                    }
                                       
                   else{
						return true;
					}
				
			}
			</script> 
 
 

  </body>


<?php 
  



 if(isset($_POST['start']) ){
    echo "<script>alert('Please waiting until your time.....')</script>";
    
   $file="./thanx.txt";
   $document=file_get_contents($file);
   echo $document;
   
     //$name12="up7452";
     
	  
         
      
  $name1= $_POST['start'];$name2= $_POST['destination'];$name3= $_POST['noofseat']; $name4= $_POST['q1'];
  $name5= $_POST['time'];$name6= $_POST['email'];$name7= $_POST['mobile'];$name8= $_POST['date']; $name9= $_POST['cust_id']; 

 

 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
 
 
 mysqli_select_db( $con,"project");
  //Find vehical ID insert select tour
 $vid=mysqli_query($con,"select vehical_id from vehical where numofRseat>='$name3' and vehicaltype='$name4'");
$vehId=mysqli_fetch_array($vid);
///// match vehical Type for second chance
 $vid2=mysqli_query($con,"select vehical_id from vehical where  vehicaltype='$name4'");
$vehId2=mysqli_fetch_array($vid2);

$vehicalId=$vehId[0];
$vehicalId2=$vehId2[0];
if($vehicalId !=null){
$name12="$vehicalId";
}
else{
$name12="$vehicalId2";    
}
//////update chosed driver's vehical seat 

$seat=mysqli_query($con,"select numofRseat from vehical where vehical_id='$name12' ");
$nseat=mysqli_fetch_array($seat);
$noseat=$nseat[0]-$name3;


mysqli_query($con,"UPDATE  vehical SET  numofRseat='$noseat' WHERE  vehical_id='$name12'" );


////for give to driver massage and update his vehical details....




//find tour id

   $pr=mysqli_query($con,"select Max(tour_id) from tour");
$a=mysqli_fetch_array($pr);
 

$b=$a[0];
if($name1!=null){
 $c=$b+1;
}
 $name13="$c";
   mysqli_query($con,"INSERT INTO  selecttour(cust_id,tour_id) VALUES ( '$name9', '$name13') "); 

  $customquery="Select * from customer where cust_id='$name9'";
  $custom2=mysqli_query($con,$customquery);
  $cuscount=mysqli_num_rows($custom2);
  
  if($cuscount==null){
  mysqli_query($con,"INSERT INTO  Customer(cust_id,phone,email) VALUES ( '$name9', '$name7','$name6') "); 
  }
  else{
       mysqli_query($con,"Update  Customer set  phone='$name7',email='$name6' where cust_id='$name9' "); 
  }
  mysqli_query($con,"INSERT INTO  customervehical(cust_id,vehical_id,vehicaltype,numofseat) VALUES ( '$name9', '$name12','$name4','$name3') ");
  
   mysqli_query($con,"INSERT INTO  Tour(tour_id,start,destination,dateof,bigintime) VALUES ( '$name13','$name1','$name2','$name8','$name5') "); 
 
   mysqli_query($con,"INSERT INTO  selecttour(cust_id,tour_id) VALUES ( '$name9', '$name13') ");
   mysqli_close($con);



}
	
 
   

  
 ?>
 

<body>

</body>
</html>