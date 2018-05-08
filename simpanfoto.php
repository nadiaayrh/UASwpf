<?php

include("../../configs/config_db.php");
include("../../classes/database.php");
include("../../classes/gambar.php");

$db         = new database;

$foto = $_GET['gambar'];
$gambar     = new gambar;

        $gambar = $_FILES["foto"]["name"];
        $gambar->simpangambar($gbr);
        move_uploaded_file($_FILES['foto']['tmp_name'],"images/".$_FILES['foto'],['name']);
                                    
 	    header("location:anggota.php");
 
    
	
?>
