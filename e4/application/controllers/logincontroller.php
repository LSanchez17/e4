<?php

class LoginController extends Controller{
	
   protected $userObject;
   
   public function do_login() {
	   // handles login
	   
	   $this->userObject = new $Users();
	   
	   if($this->userObject->checkUser($_POST['email'], $_POST['password']))
	   {
		   $userInfor = $this->userObject->getUserFromEmail($_POST['email']);
		   
		   $_SESSJK ['uID'] = $userInfo['uID'];
		   
		   header('Location: '.BASE_URL);
		   
		   $_SESSION['UID'] = $user_id;
	   }
	   else
	   {
		   $this->set('error', 'Wrong password/email combination!');
	   }
   }
	
}