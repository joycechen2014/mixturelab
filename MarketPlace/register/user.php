<?php
   class User{

	   private $conn;
	   private $table = 'market_users';	
		public $name;
		public $password;
		public $email;
		public $phone;
		public function read(){
//			$query = 'select name,password,email,phone from market_users';
			$query = 'SELECT 
		        password
				FROM ' . $this->table . 
				' where 
				name =:name';
		//echo $query;
		    $stmt = $this->conn->prepare($query);
		    $this->name = htmlspecialchars(strip_tags($this->name));
			//$this->password = htmlspecialchars(strip_tags($this->password));   				 
            
             $stmt->bindParam(':name',$this->name);
			 //$stmt->bindParam(':password',$this->password);
			
            $stmt->execute();
            return $stmt;			
		}
		
		public function read_byname(){
//			$query = 'select name,password,email,phone from market_users';
			$query = 'SELECT 
			     name, 
				 password,
				 email,
				 phone
				FROM ' . $this->table . 
				'where 
				name =:name';
		//echo $query;
		    $stmt = $this->conn->prepare($query);
			$this->title = htmlspecialchars(strip_tags($this->name));
			$this->password = htmlspecialchars(strip_tags($this->password));
			$this->email = htmlspecialchars(strip_tags($this->email));
            $this->phone = htmlspecialchars(strip_tags($this->phone));     				 
            
             $stmt->bindParam(':name',$this->name);
			
            $stmt->execute();
            return $stmt;			
		}
		
		public function insert(){

			$query = 'insert into ' . 
			     $this->table .' 
			  set 
                 name =:name,
				 password =:password,
				 email =:email,
				 phone =:phone';
			
			$stmt = $this->conn->prepare($query);
			
			$this->title = htmlspecialchars(strip_tags($this->name));
			$this->password = htmlspecialchars(strip_tags($this->password));
			$this->email = htmlspecialchars(strip_tags($this->email));
            $this->phone = htmlspecialchars(strip_tags($this->phone));     				 
            
             $stmt->bindParam(':name',$this->name);
			 $stmt->bindParam(':password',$this->password);
			 $stmt->bindParam(':email',$this->email);
			 $stmt->bindParam(':phone',$this->phone);
			 
			 if($stmt->execute()){

				 return true;
			 }
			 else{
				 printf("Error: %s.\n",$stmt->errorCode());
				 return false;
			 }

			
		}		
		
		public function __construct($db){
			$this ->conn = $db;
		}
	   
   }
?> 