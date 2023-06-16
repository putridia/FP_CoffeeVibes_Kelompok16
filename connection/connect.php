<?php

//main connection file for both admin & front end
$servername = "sql108.infinityfree.com"; //server
$username = "if0_34435266"; //username
$password = "wmuFWR0eRpQC"; //password
$dbname = "if0_34435266_easpemweb_db";  //database


// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>