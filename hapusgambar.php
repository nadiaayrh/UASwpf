<?php

include("../../configs/config_db.php");
include("../../classes/database.php");
include("../../classes/gambar.php");

$db         = new database;

$gambar     = new gambar


  
        $gambar->hapusgambar($_GET["id_gambar"]);
	    header("location:anggota.php");
 
        
   
    
	
?>
