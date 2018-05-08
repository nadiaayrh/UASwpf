<?php

include("../../configs/config_db.php");
include("../../classes/database.php");
include("../../classes/antrian.php");

$db         = new database;
$antri     = new antrian;


        
$antri->HapusDataAntri($_GET['no_antrian']);
header("location:antriancek.php");    
       
	
?>
