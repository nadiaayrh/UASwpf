<?php
	class Pasien{
		public $kodepasien;
		private $db;
       
		
		public function __construct($kodepasien = null){
			$this->kodepasien = $kodepasien;
			
			
			$database = new database;
			$this->db = $database->db;
            
		}
        

		public function tambahAntrianPasien($antrian,$kodepasien,$tgl)
        {
			return $this->db->query("insert into tbl_antrian(no_antrian,kode_pasien,tanggal) 
					VALUES ('$antrian', '$kodepasien', '$tgl')");
		}
        
        public function tambahPeriksaPasien($antrian,$kodepasien,$tgl,$keluhan)
        {
			return $this->db->query("insert into tbl_periksa (no_antrian,kode_pasien,tanggal,keluhan,cek) 
					VALUES ('$antrian','$kodepasien', '$tgl', '$keluhan','BELUM')");
		}
        
         public function tambahDataPasien($kodepasien,$nama,$gender,$alamat,$usia)
        {
			return $this->db->query("insert into tbl_pasien (kode_pasien,nama,gender,alamat,usia) 
					VALUES ('$kodepasien', '$nama', '$gender', '$alamat','$usia')");
		}
        
       
        public function AmbilAntrian()
        {
			return $this->db->query("select max(right(no_antrian,1)) as antrian from tbl_antrian WHERE tanggal=(SELECT CURDATE())");
		}
        
        public function DaftarPasien()
        {
			return $this->db->query("SELECT * From tbl_pasien");
		}
        
        public function UpdatePasien($kode_pasien, $nama, $gender, $alamat, $usia){
            
			return $this->db->query("UPDATE `tbl_pasien` SET `kode_pasien`='${kode_pasien}' , `nama`='${nama}' , `gender`='${gender}' , `alamat`='${alamat}' , `usia`='${usia}' WHERE `kode_pasien`='${kode_pasien}'");
		}
        
         public function EditDataPasien($kode_pasien) {
            return  $this->db->query("SELECT * FROM `tbl_pasien` WHERE kode_pasien='$kode_pasien'");
            
        }
        
        
	}
?>
