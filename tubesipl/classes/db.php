<?php
	class db{

		private $host = "localhost";
		private $username = "root";
		private $database = "db_tubes";
		private $password = "";
		protected $db;


		public function __construct(){
			try {
				

				/*
					* Membuat koneksi database
				*/

				$this->db = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database,$this->username, $this->password);

			} catch(PDOException $e) {
				echo "Masalah koneksi : ". $e->getMessage();
			}
		}


	}


?>