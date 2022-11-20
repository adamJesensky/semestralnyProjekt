<?php
$serverName= "localhost";
$dBUsername= "root";
$dBPassword= "";
$dBName= "svadobny_salon";

// $conn = mysql_connect($serverName,$dBUsername,$dBPassword);
$con = mysqli_connect($serverName,$dBUsername,$dBPassword, $dBName);
if(!$con){
  die("Connection failed: ".mysqli_connect_error());
}