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
    <link href="css/buton.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <!-- Side Menu -->
    <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand"><a href="http://startbootstrap.com">Menu Item</a>
            </li>
            <li class="active"><a href="Index.php">Home</a></li>
                <li><a href="">Drivers</a>
                 <ul>
                    <li><a href="../DriDetails.php">Details</a></li>
                    <li><a href="../AddNewDriver.php">Add New</a></li>
                    <li><a href="../EditDrivers.php">Edit Details</a></li>
                    
                  </ul>
                </li>
                <li><a>Customers</a>
                <ul>
                    <li><a href="../CusAdmin.php">Details</a></li>
                    <li><a href="../EditCustom.php">Edit Details</a></li>
                    
                  </ul>
                </li>
                
                <li><a>Tours</a>
                <ul>
                    <li><a href="../Tours.php">Tour Details</a></li>
                    <li><a href="../Upcoming.php">Up Coming</a></li>
                    <li><a href="../CustomDetails.php">Add Tour</a></li>
                  </ul>
                </li>
                 <li><a>Vehicle</a>
                 <ul>
                     <li><a href="../vehicalDetails.php">Details</a></li>
                     
                     <li><a href="../editVehical.php">Edit Details</a></li>
                    
                  </ul>
                
        </ul>
    </div>
    <!-- /Side Menu -->

    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
        <div class="vert-text">
            <h1><br> <br></h1>
            <h3>
                <em></em> <br>
                <em></em> </h3><br><br><br><br><br><br><br>
            <a href="#about" class="btn btn-default btn-lg">Log Out</a>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->

    <!-- Intro -->
    <div id="about" class="intro" >
        <div class="container">
            <div class="row">
                 
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h3><b>You're about to Logout from Admin Panel <br> <b> Are you Sure ? </b>.....</h3>
                      </div>
            </div>
        </div>
    </div>
    <!-- /Intro -->

     
            

     

    
    <!-- Call to Action -->
    <div>
        <div  >
                   <body>
                       
<form   method="post">
  <body>
      <div class="div1">
          
      
       <input text-align="center" type="submit" id="div1" name="logout" value="Log Out" class="action-button shadow animate yellow"><br><br>
           <div class="shadow"></div>
</div>


    </body>
</form>
                    </div>
    </div>
     <?php
     
     
     if(isset($_POST['logout'])){
      ob_start();
    
      
            $_SESSION['loggedout']=true;
           
            header("location:Index2.php");
         
    



ob_end_flush();


       }

     
     ?>

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

</html>
