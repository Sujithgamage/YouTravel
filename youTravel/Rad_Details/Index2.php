 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN PANEL</title>

    <!-- Bootstrap core CSS --> 
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <!-- Side Menu -->
     <!-- /Side Menu -->

    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
        <div class="vert-text">
            <h1><br> <br></h1>
            <h3>
                <em></em> <br>
                <em></em> </h3><br><br><br><br><br><br><br>
            <a href="#about" class="btn btn-default btn-lg">Login</a>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->

    <!-- Intro -->
    <div id="about" class="intro" >
        <div class="container">
            <div class="row">
                 
                <div>
                   <body>
                       <link rel="stylesheet" href="css/log.css" />
<form action="<?php $_PHP_SELF ?>"  method="post">
  <body>
      <div class="login">
          <link rel="stylesheet" href="log.css" />
    <input type="text" placeholder="User Name" required name="uname" id="username">  
    <input type="password" placeholder=Password required name="pword"id="password">  
   
  <input type="submit" name="adminlogin" value="Login">
   <div class="shadow"></div>
</div>


    </body>
</form>
                    </div>
            </div>
        </div>
    </div>
    <!-- /Intro -->

    <!-- Services -->
      
     
    <!-- /Services -->

     

    
    <!-- Call to Action -->
    
    
     

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

  <?php
if(isset($_POST['adminlogin'])){
    
    ob_start();
 $con = mysqli_connect("localhost","root",""); 
if (!$con)   {  
 die('Could not connect: ' . mysql_error()); 
   } 
 
mysqli_select_db( $con,"project");

$username=$_POST['uname']; 
$password=$_POST['pword'];


// To protect MySQL injection (more detail about MySQL injection)
 

$sql="SELECT * FROM adminlogin WHERE username='$username' and password='$password'";
$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row




 

  
    if(isset($_POST['uname'])&& isset($_POST['pword'])){
        if ($count==1) {
            $_SESSION['loggedin']=true;
            header("location:Index.php");
             
             
            
        }
        else{
           echo "<script>alert('Invalid username or password')</script>";
           
        }
    }



ob_end_flush();
    
}
?>
</html>
