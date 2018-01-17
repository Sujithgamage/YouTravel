<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Chat</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" ><img src="images/logo.jpg" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <form  method="post">
                    <li><input type="submit" name="lgout" value="Log Out"></li>
                    </form>
                     
                </ul>
            </div>
        </div>
    </header><!--/header-->
 <?php 
     ?>
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <?php 
  
                    
                    
                   
                    $uname="";
                    $tepm=""; 
          if(isset($_POST['chatroom'])){
           $unameex= $_POST['usertable']; 
           $uname="b"."$unameex";
                   }
                     
          
         if(isset($_COOKIE['c'])){
         $tepm=$_COOKIE['c'];
         $uname="b"."$tepm"; 
             
         }
             
         
         else{
            setcookie('c',$_POST['usertable'],time() + (3600));
         }
         
         if($uname==null){
             echo "Please Again Log";
         }
     
    function send_msg($sender,$message,$tabledb){
        $db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';

	$db_name='project';

	if($connection = mysqli_connect($db_host,$db_user,$db_pass)){
		 
		if($database = mysqli_select_db($connection,$db_name)){
			 
		}else{
			echo "connection was not found...<br />";
		}
	}else{
		echo "Unable to connect...<br />";
	}
            
		if(!empty($sender)&&!empty($message)){
			$sender = mysqli_real_escape_string($connection,$sender);
			$message = mysqli_real_escape_string($connection,$message);
                        $senderf="b"."$sender";
			//$query = "INSERT INTO `chat`.`chat` VALUES (null,'$sender','$message')";

			if($run = mysqli_query($connection,"INSERT INTO `".$senderf."` (sender,message) VALUES ('$tabledb','$message')")){
				return true;
			}else{
				return false;
			} 
		}else{
			return false;
		}
	}
     
    if(isset($_POST['send'])){
        
        
        
        if(send_msg($_POST['sender'],$_POST['message'],$uname)){
            echo "Message sent.";
        }else{
            echo "Message failed to sent.";
        }
    }
    
    if(isset($_POST['delete'])){
     
        
        $db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';

	$db_name='project';

	if($connection = mysqli_connect($db_host,$db_user,$db_pass)){
		 
		if($database = mysqli_select_db($connection,$db_name)){
			 
		}else{
			echo "connection was not found...<br />";
		}
	}else{
		echo "Unable to connect...<br />";
	}
        
        
       mysqli_query($connection,"Delete from `".$uname."`");
			 
        
    }
    
     if(isset($_POST['lgout'])){
        
         $cookie_name ='c';
         unset($_COOKIE[$cookie_name]);
         setcookie($cookie_name,'',time()-3600);
       
         ob_start();
     
       
        $_SESSION['loggedout']=true;
            
        header("location:../CustomDetails1.php");
            
        ob_end_flush();
   }
 ?>
    <div class="box">
     

   <?php 
        
         $uname="";
          $tepm=""; 
          if(isset($_POST['chatroom'])){
                        
                   $unameex= $_POST['usertable']; 
                   $uname="b"."$unameex";
                    }
                     
          
         if(isset($_COOKIE['c'])){
         $tepm=$_COOKIE['c'];
         $uname="b"."$tepm"; 
             
         }
             
         
         else{
            setcookie('c',$_POST['usertable'],time() + (3600*30));
         }
                   
        if($uname==null){
             echo "Please Again Log";
         }
                    
        function get_msg($uname1){
		//$query = "SELECT `sender`,`message` FROM `chat`.`chat`";
	
   
     
        $db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';

	$db_name='project';

	if($connection = mysqli_connect($db_host,$db_user,$db_pass)){
		 
		if($database = mysqli_select_db($connection,$db_name)){
			 
		}else{
			echo "Database was not found...<br />";
		}
	}else{
		echo "Unable to connect...<br />";
	}
    
                $run1 = mysqli_query($connection,"SELECT `sender`,`message` FROM `".$uname1."`");
		$messages = array();

		while($message = mysqli_fetch_assoc($run1)){
			$messages[] = array('sender'=>$message['sender'],'message'=>$message['message']);
		}
		return $messages;
	}
         
        
          
            $messages = get_msg($uname);
                foreach ($messages as $message) {
                    echo '<strong>'.$message['sender'].' Sent</strong><br />';
                    echo '<p>'.$message['message'].'<br /><br /></p>';
                }
         
        ?>
    </div>
    <div class="box">
 <form action="" method="post">
    <label>Receiver's ID:<input type="text" name="sender" class="form-control" placeholder="142XXX"></label><br />
    <label>Enter Message:<div>
                         <br>   <textarea name="message" id="message"  class="form-control" rows="8" placeholder="Message"></textarea>
                        </div></label>
    <div align="right" class="form-group">
    <input class="btn btn-success btn-md btn-block" type="submit" name="send" value="SEND">
    <input class="btn btn-success btn-md btn-block" type="submit" name="delete" value="DELETE">
    </div>
 </form>
</div>

    

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
