<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "bincom_test");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// mysqli_close($conn);
?>