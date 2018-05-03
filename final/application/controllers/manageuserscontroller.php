<?php

class ManageUsersController extends Controller{
	
	public $userObject;
	protected $access =1;
  
   	public function users($uID){
		$this->userObject = new Users();
		$user = $this->userObject->getUser($uID);	    
	  	$this->set('user',$user);
   	}
	
	public function index(){
		$this->userObject = new Users();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'The Manage Users View');
		$this->set('users',$users);
		$this->set('first_name',$first_name);
		$this->set('last_name',$last_name);
		$this->set('email',$email);
	}
	public function approve($uID) {
		
		
		$this->userObject = new Users();
		
		$result = $this->userObject->approveUser($uID);
		$outcome = $this->userObject->getAllUsers();
		$this->set('users',$outcome);
		$this->set('message', $result);
		$this->set('task', 'update');
		header("Location: " . BASE_URL . "manageusers/");
	}
	public function delete($uID) {
		
		$this->userObject = new Users();
		$deleteUser = $this->userObject->deleteUser($uID);
		$this->set('deleteUser', $deleteUser);
		header("Location: " . BASE_URL . "manageusers/");
	}

}

?>