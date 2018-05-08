<?php
	class pengguna{
		private $id;
		private $password;
		protected $db;
		
		public function __construct($user,$pass){
			$this->username = $user;
			$this->password = $pass;
			
			$database = new database;
			$this->db = $database->db;
		}
		
		public function login(){
			$get = $this->db->query("SELECT * FROM pengguna 
									 WHERE id = '".$this->username."'
									 AND password = '".$this->password."'");
									 
			if($this->db->affected_rows == 0){
				return FALSE;
                 echo "<script>alert('Selamat datang.'); window.location = 'manager/index.php'</script>";
			}
			else{
				$hasil = $get->fetch_assoc();
				return $hasil["nama"];
            }
		}
	}
?>