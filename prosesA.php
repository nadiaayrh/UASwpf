<?php
	if (isset($_POST['antrian'])) {
	include 'koneksi.php';
	
	session_start();
					
	$antrian	= $_POST['antrian'];
	$kodepasien	= $_POST['kodepasien'];
	$nama 		= $_POST['nama'];
	$alamat 	= $_POST['alamat'];
	$usia 	    = $_POST['usia'];
	$keluhan 	= $_POST['keluhan'];
	$gender 	= $_POST['gender'];
	$tgl 		= date('Y-m-d');
	
	$query = mysqli_query($conn, "select * from tbl_pasien WHERE kode_pasien ='$kode_pasien'");
	$nomor  = mysqli_fetch_array($query);
	$kode	= $nomor['kode_pasien'];
	 if ($kode == $kodepasien)
	 {
		$simpan		 = mysqli_query($conn, "insert into tbl_antrian(no_antrian,kode_pasien,tanggal) 
					VALUES ('$antrian', '$kodepasien', '$tgl')");
		$simpan1	 = mysqli_query($conn, "insert into tbl_periksa (no_antrian,kode_pasien,tanggal,keluhan,cek) 
					VALUES ('$antrian','$kodepasien', '$tgl', '$keluhan','BELUM')");
		if ($simpan && $simpan1)
		{
			echo "<script>alert('Akun Berhasil Didaftarkan!'); window.location = 'antrian.php'</script>";
		} 
	 }
	else if ($kode != $kodepasien)
	 {
		$simpan		 = mysqli_query($conn, "insert into tbl_antrian(no_antrian,kode_pasien,tanggal) 
					VALUES ('$antrian', '$kodepasien', '$tgl')");
		$simpan1	 = mysqli_query($conn, "insert into tbl_periksa (no_antrian,kode_pasien,tanggal,keluhan,cek) 
					VALUES ('$antrian','$kodepasien', '$tgl', '$keluhan','BELUM')");
		$simpan2     = mysqli_query($conn,"insert into tbl_pasien (kode_pasien,nama,gender,alamat,usia) 
					VALUES ('$kodepasien', '$nama', '$gender', '$alamat','$usia')");
		
		if ($simpan && $simpan1 && $simpan2)
		{
			echo "<script>alert('Akun Berhasil Didaftarkan!'); window.location = 'antrian.php'</script>";	
		} 
		else 
		{
			echo "<script>alert('Akun Gagal Disimpan!'); window.location = 'antrian.php'</script>";	
		}
	 }
	
	
	
}
?>