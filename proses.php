<?php  
    include("configs/config_db.php");
	include("classes/database.php");
	include("classes/pasien.php");

    $pas = new Pasien;
    
    $aksi = $_GET['aksi'];
    if($aksi == "tambah"){
        $pas->tambahAntrianPasien($_POST["NIG"],
                                $_POST["Nama"],
                                $_POST["Jabatan"],
                                $_POST["Sebagai"],
                                $_POST["Alamat"],
                                $_POST["Tempat_Lahir"],
                                $_POST["Tanggal_Lahir"],
                                $_POST["No_HP"],
                                $_POST["Email"],
                                $_POST["pass"]);
        $pas->tambahPeriksaPasien (
                                    )
        $pas->tambahDataPasien (
                                    )
 	    header("location:antrian.php");
 }  
    elseif($aksi == "hapus"){ 	
        $guru->HapusDataguru($_GET["NIG"]);
	    header("location:DataGuru.php");
 }
        
    elseif($aksi == "update"){
 	    $guru->UpdateDataguru($_POST["NIG"],
                              $_POST["Nama"],
                              $_POST["Jabatan"],
                              $_POST["Sebagai"],
                              $_POST["Alamat"],
                              $_POST["Tempat_Lahir"],
                              $_POST["Tanggal_Lahir"],
                              $_POST["No_HP"],
                              $_POST["Email"],
                              $_POST["pass"]);
 	    header("location:DataGuru.php");
 }
?>