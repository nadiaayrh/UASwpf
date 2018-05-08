<?php
	class antrian{
		
		private $db;
     
        private $kode_pasien;
        
		
		public function __construct($kode_pasien = null){
			$this->kode_pasien = $kode_pasien;
            
			
			// Instansiasi objek koneksi DB
			$database = new database;
			$this->db = $database->db;
            
		}
        
      

		public function AmbilDaftarAntrian()
        {
			
            
            return $antrian = $this->db->query("SELECT * FROM tbl_pasien NATURAL JOIN tbl_antrian NATURAL JOIN tbl_periksa WHERE cek = 'BELUM'"); //($this->db->affected_rows > 0) ? $antrian : FALSE; 
            
		}
        
        public function HapusDataAntri($no_antrian) {
            $hapus = $this->db->query("DELETE FROM `tbl_antrian` WHERE no_antrian='$no_antrian'");
        }
        
       
	}
?>
