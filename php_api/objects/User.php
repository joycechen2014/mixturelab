<?php
   class User{

	   private $conn;
	   private $table = 'users';	
		public $firstname;
		public $lastname;
		public $homeaddress;
		public $email;
		public $homephone;
		public $cellphone; 
		public function read(){
//			$query = 'select firstname,lastname,homeaddress,email,home_phone,cell_phone from users';
			$query = 'SELECT 
			     firstname, 
				 lastname,
				 email,
				 home_phone,
				 cell_phone,
				 homeaddress
				FROM ' . $this->table ;
		//echo $query;
		    $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt;			
		}
		public function __construct($db){
			$this ->conn = $db;
		}
	   
   }
?> 