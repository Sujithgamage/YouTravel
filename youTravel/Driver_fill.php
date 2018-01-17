<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Driver</title>
	<meta charset="utf-8">
	<link rel="icon" href="http://dzyngiri.com/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="http://dzyngiri.com/favicon.png" type="image/x-icon" />
    <meta name="description" content="Codester is a free responsive Bootstrap template by Dzyngiri">
    <meta name="keywords" content="free, template, bootstrap, responsive">
    <meta name="author" content="Inbetwin Networks">  
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>   
    
	<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}	</script>
	<script>		
		 jQuery(window).load(function() {	
		 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();}	
	
	jQuery(".list-blog li:last-child").addClass("last"); 
	jQuery(".list li:last-child").addClass("last"); 

	
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
<!--  header  -->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="index.html"><img alt="" src="img/logo.png"> </a></h1>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li><a href="YouTravel/index.html">Home</a></li>
                <li  class="active"><a href="YouTravel/customerLoggin.php">Customers</a></li>
                <li><a href="YouTravel/driverLoggin.php">Drivers</a></li>
                 
              </ul>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
    </header>
<div class="bg-content">       
  <!--  content  -->      
   <div id="content"><div class="ic"></div>
    <div class="container">
          <div class="row">
        <article class="span8">
         <div class="inner-1">         
          <ul class="list-blog">
         
         <div class="bg-content2">
<div>
           <h3>Enter Your Personal Details</h3>
            
             <div class="inner-1">
            <form id="contact-form" action="<?php $_PHP_SELF ?>"  method="post">
            
                  <div class="success"> Your message has been sent succesfuly!<strong> We will be in touch soon.</strong> </div>
                  <fieldset>
                   <div>
                    <label class="id">
                    <input type="text" name="cid"  placeholder="Customer ID">
                    <br>
                    <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
                    </div>
                <div>
                    <label class="name">
                    <input type="text" name="name1" placeholder="Your Name">
                  <br>
                    <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
                    </div>
                  <div>
                    <label class="phone">
                    <input type="tel" name="phone" placeholder="Telephone">
                    <br>
                    <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
                    </div>
                <div>
                    <label class="email">
                    <input type="email" name="mail" placeholder="E-mail">
                    <br>
                    <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
                    </div>
                 
                 
                
           <h3>Enter Your Tour Details</h3>
     <div class="bg-content2">
<div>
                  <div class="success"> Your message has been sent succesfuly!<strong> We will be in touch soon.</strong> </div>
                  <fieldset>
                <div>
                    <label class="bigin">
                    <input type="text" name="start" placeholder="Start">
                  <br>
                    <span class="error">*This is not a valid City.</span> <span class="empty">*This field is required.</span> </label>
                    </div>
                  <div>
                    <label class="endof">
                    <input type="text" name="desti" placeholder="Destination">
                    <br>
                    <span class="error">*This is not a valid  City.</span> <span class="empty">*This field is required.</span> </label>
                    </div>
                <div>
                    <label class="dateof">
                    <input type="date" name="det" placeholder="Date">
                    <br>
                    <span class="error">*This is not a valid Date .</span> <span class="empty">*This field is required.</span> </label>
                    </div>
                    
                    <div>
                    <label class="timeof">
                    <input type="time" name="time" placeholder="Time">
                    <br>
                    <span class="error">*This is not a valid Time .</span> <span class="empty">*This field is required.</span> </label>
                    </div>
                 
                 <div>
                    <label class="numofseats">
                    <input type="int" name="nofseat" placeholder="Number Of Seats">
                    <br>
                    <span class="error">*This is not a valid  seats .</span> <span class="empty">*This field is required.</span> </label>
                    
                    </div>
                    
                    <div>
                     <p><b>Which Vehical Type do you want? </b><br />
                    <label class="vtype">
                      
   <input type="radio" name="q1" value="Van"   /> Van 
     <input type="radio" name="q1" value="Car" /> Car   
     <input type="radio" name="q1" value="Bus" /> Bus </p> 
                   <span class="error">*This is not a valid  Vehical Type .</span> <span class="empty">*This field is required.</span> </label>
                    </div>
                 
                 
                       <div class="btn btn-1" data-type="submit" name="send">Send</a></div>
              </fieldset>
                </form>
          </div>
          
           </ul>
          </div>  
        </article>
        <article class="span4">
          <h3 class="extra">Check Your Details</h3>
          <h5>Enter Your ID</h5>
          
          <form id="search" action="<?php $_PHP_SELF ?>" method="post" accept-charset="utf-8" >
            <div class="clearfix">
              <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" >
              <a type="submit"  name="search1" onClick="document.getElementById('search').submit()" class="btn btn-1">Search</a> 
              <br>
              </div>
          <p>Details of ....<p>    
              
  <?php 
 
 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
 
mysqli_select_db( $con,"project");

$result = mysqli_query($con,"SELECT * FROM Driver");
 	
echo "<table border='3'>

<tr>
<th>Driver ID</th>
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
 

mysqli_close($con);


?>
        </article>
      </div>
     </div>
  </div>
 </div>

<!--  footer  -->
<footer>
      <div class="container clearfix">
       <ul class="list-social pull-right">
          <li><a class="icon-1" href="#"></a></li>
          <li><a class="icon-2" href="#"></a></li>
          <li><a class="icon-3" href="#"></a></li>
          <li><a class="icon-4" href="#"></a></li>
        </ul>
    <div class="privacy pull-left">&copy; 2017 |Rapid Application Development</a>
  </div>
    </footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
 