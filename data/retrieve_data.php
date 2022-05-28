<?php 

// Select query from pollting_unit 
$sql = 'SELECT polling_unit_name FROM polling_unit';

$result = mysqli_query($conn, $sql);

$polling = mysqli_fetch_all($result, MYSQLI_ASSOC);


print_r($polling);


?>