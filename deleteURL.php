<?php
$siteName = $_POST['name']; 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rss";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM news WHERE siteName='$siteName'";

if (TRUE==$conn->query($sql) ) {
    echo '<script type="text/javascript">alert("Successfully Deleted..!");window.location.assign("rssIn.html");</script>';
} else {
    //echo "Error deleting record: " . $conn->error;
    echo '<script type="text/javascript">alert("Have an error..!");window.location.assign("rssIn.html");</script>';
}

$conn->close();
?>
