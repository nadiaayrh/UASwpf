<?php
session_start();
session_destroy();	
	unset($_SESSION['id']);
	unset($_SESSION['password']);
    echo "<script>alert('Anda telah berhasil keluar.'); window.location = 'login.php'</script>";
?>
