<?php
//echo "google.com";

 $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "rss";
	$conn = new mysqli($servername, $username, $password, $dbname);
    
    $sql = "SELECT * FROM news";
	
	$newsItems = mysqli_query($conn,$sql);
	
	while($row = mysqli_fetch_array($newsItems)){
		echo "<input type='button' style='background-color: gray; color: white; border: none; border-radius: 4px; cursor: pointer; height:30px; width:120px; font-size:13px;' value='".$row["siteName"]."' onClick='singleTab(this.value);'/><br/><br/>";
	}
	
?>