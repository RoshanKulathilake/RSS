<?php // Create a database connection.
	$dbuser = "root";
	$dbpass = "";
	$dbhost = 'localhost';
 
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,"rss");


//This should retrive HTML form data and insert into database
	$query  = "INSERT INTO user (fName, lName, email, pword) 
            VALUES ('".$_POST["fName"]."','".$_POST["lName"]."','".$_POST["email"]."','".$_POST["pword"]."')";

        $result = mysqli_query($conn, $query);
        //Test if there was a query error
        if ($result) {
            //SUCCESS
			echo '<script type="text/javascript">alert("Successfully Created..!");window.location.assign("rssIn.html");</script>';
			
        } else {
            //FAILURE
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
            //last bit is for me, delete when done
        }

mysqli_close($conn);
?>