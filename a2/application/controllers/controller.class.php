<?php
class controller{
	
	public $load;
	public $user;
	
	
	function __construct(){
		$this->load= new Load();
		$this->user= new User();
		$this->home();
	}
	function home(){
		$this->user->userID='mnastal';
		$this->user->firstname='Melanie';
		$this->user->lastname='Nastal';
		$this->user->email='mnastal@email.com';
		$this->user->role='admin';
	
		$data = $this->user->getName();
		$this->load->view('view.php',$data);
		
		
		
	}
	
}
?>

		