<?php 

    // Connection
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'dolaptop';

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);


    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
 ?>