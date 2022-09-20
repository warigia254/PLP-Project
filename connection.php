<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "mwalimu.pp1";

try {
    $conn = new PDO("mysql:host=$servername;database=$database, $username; $password");
    // Parse error: syntax error, unexpected ';', expecting ')' in C:\wamp64\www\templates\connection.php on line 9
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    echo ('Connected Successfully');    
}  

// $conn=mysqli_connect($servername,$username,$password,$database);
// if(!$conn)
// {
//     die("connection failed:".mysqli_connect_error());
// }
// else
// {
//     echo "connected";
// }


catch(PDOException $e) {

    echo('Connection Failed').$e->getMessage();
}

?>