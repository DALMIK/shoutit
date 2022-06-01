<?php 

$host = "localhost";
$user = "root";
$password = "";
$db_name = "shoutit";

$con = mysqli_connect($host, $user, $password, $db_name);

if(!$con){
    die('connection failed***** '. mysqli_connect_error());
}

?>