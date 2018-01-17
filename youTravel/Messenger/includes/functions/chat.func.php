<?php 



function get_msg(){
		//$query = "SELECT `sender`,`message` FROM `chat`.`chat`";
	
    
     
        $db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';

	$db_name='chat';

	if($connection = mysqli_connect($db_host,$db_user,$db_pass)){
		 
		if($database = mysqli_select_db($connection,$db_name)){
			 
		}else{
			echo "Database was not found...<br />";
		}
	}else{
		echo "Unable to connect...<br />";
	}
    
                $run1 = mysqli_query($connection,"SELECT `sender`,`message` FROM `chat`");
		$messages = array();

		while($message = mysqli_fetch_assoc($run1)){
			$messages[] = array('sender'=>$message['sender'],'message'=>$message['message']);
		}
		return $messages;
	}
	function send_msg($sender,$message){
                  $db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';

	$db_name='chat';

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

			//$query = "INSERT INTO `chat`.`chat` VALUES (null,'$sender','$message')";

			if($run = mysqli_query($connection,"INSERT INTO `chat`.`chat` VALUES (null,'$sender','$message')")){
				return true;
			}else{
				return false;
			} 
		}else{
			return false;
		}
	}
 ?>

