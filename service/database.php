<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "dummy";

$db= mysqli_connect($hostname, $username, $password, $database);

if($db->connect_error){
  echo("Koneksi Gagal : ".$db->connect_error);  
  die("Koneksi Gagal : ".$db->connect_error);
}
  
?>