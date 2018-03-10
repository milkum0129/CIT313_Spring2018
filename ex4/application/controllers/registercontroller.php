<?php
class RegisterController extends Controller
{
	
public $userObject;
	
	public function defaultTask()
	{
		
		$this->userObject = new User();
		$this->set('task', 'add');
	
	
	}
	
	public function add()
	{
		
			$this->userObject = new User();
			
			$password=$_POST['password'];
			$passhash=password_hash($password,PASSWORD_DEFAULT);
			
			$data = array('email'=>$_POST['user_email'],'first_name'=>$_POST['user_first_name'],'last_name'=>$_POST['user_last_name'],'password'=>$passhash);
			
	
			$result = $this->userObject->add_user($data);
			
			$this->set('message', $result);
	}

}
?>