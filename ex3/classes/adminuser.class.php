<?php

class adminuser extends users {


public function __construct($user_level,$user_id)
{
	parent::__construct($user_level);
	$this->user_id=$user_id;
	$this->user_level=$user_level;
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
static public function getCalc($a,$b)
{
	return ($a+$b)*$a;
}
}
?>