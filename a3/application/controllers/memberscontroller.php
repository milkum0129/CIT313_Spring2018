<?php

class MembersController extends Controller
{

public $usersObject;
   
public function view($uID)
	{
	   
		$this->usersObject = new User();
		$user = $this->usersObject->getUser($uID);	    
	  	$this->set('user',$user);
	   
   	}
	
	public function defaultTask()
	{
		
		$this->usersObject = new User();
		$users = $this->usersObject->getAllUsers();
		$this->set('users',$users);
	}
}	
?>