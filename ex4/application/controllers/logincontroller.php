<?php

class LoginController extends Controller{
	
	protected userObject;
   
   public function do_login()
   {
	   $this->userObject= new User();
	
		if($this->userObjet->checkUser($_POST['email'],$_POST['password']))
		{
			echo "good user";
		else {
			echo "bad user";
		}
		
		
	   
   }
	
	
}
?>