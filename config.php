<?php

//set the connection
$server = "";
$username= "";
$password="";
$database="";

$conn = mysqli_connect($server, $username, $password, $database);
if($conn == false){
    dir('Error : Cannot Connect');
}
?>