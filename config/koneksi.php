<?php
// untuk menjadikan file php jadi format json
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$host="localhost";
$user="root";
$pass="";
$db="pengurus";

$con=mysqli_connect($host,$user,$pass,$db);

?>