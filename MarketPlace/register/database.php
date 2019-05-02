<?php
	
	   class Database{
	   private $host = 'localhost';
	   private $db_name = 'marketplace';
	   private $username = 'marketplace';
	   private $password ='111222';
	
	//Database connection_aborted   
	   public function connect(){
		   $this->conn = null;
		   try{
			   $this->conn = new PDO('mysql:host=' .$this->host . ';dbname=' .$this->db_name,
			   $this->username,$this->password);
			  // $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			  $this->conn->exec("set names utf8");
		   }catch(PDOException $e){
			   echo 'Connection Error:' . $e->getMessage();
		   }
		   return $this->conn;
	   }
	   
   }

?>