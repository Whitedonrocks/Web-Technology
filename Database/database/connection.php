<?php

$host= "localhost";
$username= "root";
$password= "prayag123";
$dbname="web";

$connection= new mysqli($host, $username, $password, $dbname);
if($connection->connect_error){
    die("Connection failed:");
}
echo "Connected successfully";

?>
