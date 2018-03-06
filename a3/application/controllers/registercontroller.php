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
			
			$data = array('email'=>$_POST['user_email'],'password'=>$_POST['user_password'],'first_name'=>$POST['user_first_name'],'last_name'=>$POST['user_last_name']);
			
	
			$result = $this->userObject->add_user($data);
			
			$this->set('message', $result);
	}
}
?>