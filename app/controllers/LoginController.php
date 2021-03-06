<?php

class LoginController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Login');
        parent::initialize();
    }
    private function _registerSession(User $user)
    {

        $this->session->set('auth',array(
            'roll_no' => $user->roll_no,
            'name' => $user->name
        ));

	
    }

    private function _teacherregisterSession(Teacher $user)
    {

        $this->session->set('auth',array(
            't_id' => $user->t_id,
            'name' => $user->name
        ));

	
    }

    public function indexAction()
    {

	if ($this->request->isPost()) {
            $email = mb_strtolower($this->request->getPost('email'));
            $password = $this->request->getPost('password');
            $user = User::findFirst(array(
                "(u_email = :email:)",
                'bind' => array('email' => $email)
            ));
		
	    if($user != false){
		$user2 = User::findFirst(array(
		        "(u_email = :email: AND pass = :password:)",
		        'bind' => array('email' => $email, 'password' => sha1("$password"."$user->salt"))
		    ));
                if ($user2 != false) {
			if($user2->active==0)
				$this->flash->error('Please verify Email Address');
			else
			{
			        $this->_registerSession($user);  //// session variable
			        return $this->response->redirect('dashboard');
			}
               }
	       else
               $this->flash->error('Wrong email/password');
	   }
	   else
		$this->flash->error('Email Unregistered');
        }
    }

	public function teacherAction()
    {

	if ($this->request->isPost()) {
            $email = mb_strtolower($this->request->getPost('email'));
            $password = $this->request->getPost('password');
            $user = Teacher::findFirst(array(
                "(email = :email:)",
                'bind' => array('email' => $email)
            ));
		
	    if($user != false){
		$user2 = Teacher::findFirst(array(
		        "(email = :email: AND pass = :password:)",
		        'bind' => array('email' => $email, 'password' => sha1("$password"."$user->salt"))
		    ));
                if ($user2 != false) {
			if($user2->active==0)
				$this->flash->error('Please verify Email Address');
			else
			{
			        $this->_teacherregisterSession($user);  //// session variable
			        return $this->response->redirect('teacherdashboard');
			}
               }
	       else
               $this->flash->error('Wrong email/password');
	   }
	   else
		$this->flash->error('Email Unregistered');
        }
    }




	
}
?>
