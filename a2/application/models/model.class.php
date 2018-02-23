<?php

abstract class model {
	
protected $userID;
protected $firstname;
protected $lastname;
protected $email;
protected $role;
	
	
	public function __construct()
	{
	//will revisit
	}

	public function __set($name,$value)
	{
	$this->$name=$value;
	return;
	}

	public function __get($name)
	{
	return $this->$name;
	}

	public function __destruct()
	{

	}
}
?>