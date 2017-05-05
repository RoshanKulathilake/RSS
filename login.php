<?php
	
	$tempEmail=$_POST['email'];
	$tempPWord=$_POST['pword'];

   $dbuser = "root";
   $dbpass = "";
   $dbhost = 'localhost';
 
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,"rss");
   if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		
	}
   $sql="SELECT * FROM `user` WHERE `email`='$tempEmail'";

   

   $result= mysqli_query( $conn , $sql);
   $row = mysqli_fetch_array($result);
   
  
	if($tempPWord == $row['pword']){
		echo '<script type="text/javascript">alert("Login Sucessfully..!");window.location.assign("rssIn.html");</script>';
		//header("Location: http://localhost/rss/rssIn.html");
	}
	else{
		echo 'Invalid Username or Password' ;
		//header("Location: http://localhost/rss/index.html");
					
	}
			
	   
   
   mysqli_close($conn);
?>


