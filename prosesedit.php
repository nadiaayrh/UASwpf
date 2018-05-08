<?php

include("../../configs/config_db.php");
include("../../classes/database.php");
include("../../classes/pasien.php");

$db         = new database;
$pasien     = new pasien;



$pasien->UpdatePasien($_POST["kode_pasien"],
                              $_POST["nama"],
                              $_POST["gender"],
                              $_POST["alamat"],
                              $_POST["usia"]);
                              
header("location:anggota.php");
       
	
?>
