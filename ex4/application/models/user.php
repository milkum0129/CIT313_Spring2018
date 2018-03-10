<?php
class User extends Model{
	
	public function getAllUsers($limit = 0){
		
		if($limit > 0){
			
			$numposts = ' LIMIT '.$limit;
		}
		
		$sql =  'SELECT uID, email, password, first_name, last_name FROM users'.$numposts;
		
		// perform query
		$results = $this->db->execute($sql);
		
		while ($row=$results->fetchrow()) {
			$users[] = $row;
		}

		return $users;
	
	}

	function getUser($uID){
		
		$sql =  'SELECT uID, email, password, first_name, last_name FROM users WHERE uID = ?';
		
		// perform query
		$results = $this->db->getrow($sql, array($uID));
		
		$user = $results;
	
		return $user;
	
	}
	
		public function add_user($data){
		
		$sql='INSERT INTO users (email,first_name,last_name,password) VALUES (?,?,?,?)'; 
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;
		
	}
		public function checkUser($email, $password)
		{
			$sql = "SELECT email, password FROM users where email =?";
			$results = $this->db-getrow($sql, array($email));
			$user = $results;
			return $user;
		}
		
}
?>