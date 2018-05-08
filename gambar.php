<?php

   class gambar{
       public $id_gambar;
       private $db;
       
		
		public function __construct($id_gambar = null){
			
			
			// Instansiasi objek koneksi DB
			$database = new database;
			$this->db = $database->db;
            
        }
        public function simpangambar($id_gambar){
            return $this->db->query("INSERT INTO `gambar`
                  VALUES ('${id_gambar}')");
        }

        public function tampilgambar($id_gambar){
            return $gbr = $this->db->query("SELECT * FROM `gambar` WHERE id_gambar ='$id_gambar'");
                                                 
        }
       
        public function updategambar($id_gambar){
            return $this->db->query("UPDATE `gambar` SET id_gambar='${id_gambar}'");
        }
       
       
       
       public function hapusgambar($id) {
            return $this->db->query("DELETE FROM `gambar` WHERE id_gambar='$id'");
        }
}
   

?>