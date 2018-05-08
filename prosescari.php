<?php

include("../../configs/config_db.php");
include("../../classes/database.php");

include("../../classes/gambar.php");

$gambar = new gambar ;

$db         = new database;

                  if($_POST["submit"])
                  {
            $namafile   =$_FILES['picture']['name'];
            $pindah   = $_FILES['picture']['tmp_name'];
            
            $lokbaru    =$folder.$namafile;
            $gagal      =$_FILES['picture']['error'];

                      $gambar->simpanGambar($pindah,$lokbaru);
                      echo " URL=?isi=gambar>";
                  }
                  
                              
header("location:anggota.php");
       
	
?>