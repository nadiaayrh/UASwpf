<?php
	class manager{
		
		private $db;
     
        private $id;
        
		
		public function __construct($id = null){
			$this->id = $id;
            
			
			// Instansiasi objek koneksi DB
			$database = new database;
			$this->db = $database->db;
            
		}
        
        public function AmbilDataManager()
        {
            $dataman = $this->db->query("SELECT * FROM pengguna WHERE id='".$this->id);
            return $dataman;
            
        }
        
       
	}
?>
