<?php
	class session{
		public function cekHakAkses($peran){
			session_start();
			
			if(isset($_SESSION["id"]) AND isset($_SESSION["password"])){
				
				$user = new Pengguna($_SESSION["id"],$_SESSION["password"]);
				
				if($user->login() !== $peran){
					header("Location: admin/login.php");
				}
			}
			else
            {
				header("Location: admin/login.php");
			}
		}
	}
?>