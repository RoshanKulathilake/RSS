<?php
	$dbuser = "root";
	$dbpass = "";
	$dbhost = 'localhost';
	
	$des = $_POST['name'];
	$url = $_POST['url'];
	
// Create connection
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,"rss");
	
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		
	}
	$sql = "INSERT INTO news (siteName, siteURL) VALUES ('$des', '$url')";
	$result = mysqli_query($conn, $sql);
	
        if($result){
				echo '<script type="text/javascript">alert("Successfully Inserted..!");window.location.assign("rssIn.html");</script>';
				
		}else{
			echo '<script type="text/javascript">alert("Have an error..!");window.location.assign("rssIn.html");</script>';
        }
        mysqli_close($conn);
		
?>