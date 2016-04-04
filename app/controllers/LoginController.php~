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

    public function indexAction()
    {

	//$this->view->setRenderLevel(View::LEVEL_NO_RENDER);
	if ($this->request->isPost()) {
            $email = mb_strtolower($this->request->getPost('email'));
            $password = $this->request->getPost('password');
            $user = User::findFirst(array(
                "(u_email = :email:)",
                'bind' => array('email' => $email)
            ));
		
	    if($user != false){

            if ($user->pass==$password) {
                $this->_registerSession($user);  //// session variable
//echo "bando";
               return $this->response->redirect('practice');
            }
	}
            $this->flash->error('Wrong email/password');
        }
    }




	
}
?>
