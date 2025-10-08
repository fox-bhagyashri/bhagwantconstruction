<?php


$servername = "localhost";
$username = "bhag_bhagwant";
$password = "cG6GHCh20Ol%1#DC";
$dbname = "bhag_bhagwantconstruction";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";
?>