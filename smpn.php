<?php
	$file = $_FILES["berkas"];
	
	$nama			= $file["name"];
	$pos_sementara	= $file ["tmp_name"];
	$jenis			= $file["type"];
	$ukuran			= $file["size"];
	
	$pos_akhir = "images/".$nama;
	
	if(copy($pos_sementara,$pos_akhir))
		echo "<script>alert('Berkas telah di upload ke ${pos_akhir}'); window.location = 'anggota.php'</script>";
	else
		echo "<script>alert('Berkas gagal di upload'); window.location = 'anggota.php'</script>";

?>