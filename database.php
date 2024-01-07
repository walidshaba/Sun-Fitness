<?php
$links =  mysqli_connect("localhost", "root", "", "sun_fitness");

// Check Connection

if($links->connect_error)
    die("Connection Error: " . $links->connect_error)
?>