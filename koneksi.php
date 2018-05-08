<?php

ob_start();

$hostDB 	= "localhost";
$userDB 	= "root";
$passDB 	= "";
$database   = "proyek_uas";

$conn = mysqli_connect("$hostDB","$userDB","$passDB","$database");
error_reporting(0);
if(mysqli_connect_errno())
{
	echo "KONEKSI GAGAL";
	die();
}
?>
