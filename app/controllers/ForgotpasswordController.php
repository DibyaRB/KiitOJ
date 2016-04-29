<?php

class ForgotpasswordController extends ControllerBase
{

 public function initialize()
    {
        $this->tag->setTitle('Forgot password');
        parent::initialize();
    }

    public function indexAction()
    {
	//Function to generate a random string to be used as salt.
		function genUniqueReset ($length = 8)
		{
			  // given a string length, returns a random password of that length
		  $UniqueReset = "";
		  // define possible characters
		  $possible = "0123456789abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		  $i = 0;
		  // add random characters to $password until $length is reached
		  while ($i < $length) {
		    // pick a random character from the possible ones
		    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
		    // we don't want this character if it's already in the password
		    if (!strstr($UniqueReset, $char)) {
		      $UniqueReset .= $char;
		      $i++;
		    }
		  }
		  return $UniqueReset;
		};

	if($this->request->isPost())
	{
		//Get all posted values from form.
		$email=$this->request->getPost('email');
		
		$user = User::findFirst(array(
              		  "(u_email = :email:)",
                	  'bind' => array('email' => $email)
           		 ));

		if($user==false)
		{
		}
		else
		{
			$user->reset=genUniqueReset(50);
			$user->save();
			$msg=array ("html" => "Hi ".$user->name.",<br>Please click here to reset your password: <br> <a href='http://localhost/KiitOJ/forgotpassword/set/".$user->roll_no."/".$user->reset."'>Continue</a><br> Else please copy paste this link on your browser's URL bar: <br> <a href='http://localhost/KiitOJ/forgotpassword/set/".$user->roll_no."/".$user->reset."'>http://localhost/KiitOJ/forgotpassword/set/".$user->roll_no."/".$user->reset."</a><br>  Thank you.",
					"subject" =>"KIIT Online Judge:Forgot Password email",
					"toemail" => $email,
					"fromemail" =>"noreply@kiitoj.com",
					"fromname" =>"Kiit Online Judge",
					"trackopen" => true );
					$mandrill = new MandrillController();
					$mandrill->sendAction($msg);
		}
		$this->flash->error('Check Your Email Address.');
		return $this->response->redirect("login");
	}
	
    }

	public function setAction($roll,$u_reset)
    	{
		$user = User::findFirst(array(
              		  "(roll_no = :id: AND reset = :reset:)",
                	  'bind' => array('id' => $roll, 'reset' => $u_reset)
           		 ));
		if($user==false)
		{
		}
		else
		{
			$this->view->ur1=$u_reset;
			$this->view->email=$user->u_email;
		}
    	}

	public function updateAction()
    	{
		if($this->request->isPost())
		{
			//Get all posted values from form.
			$email=$this->request->getPost('email');
			$reset=$this->request->getPost('hash');
			$newpass=$this->request->getPost('pass');
			$cpass=$this->request->getPost('cpass');

			$user = User::findFirst(array(
              		  "(u_email = :id: AND reset=:reset:)",
                	  'bind' => array('id' => $email, 'reset'=>$reset)
           		 ));
		
			if($user!=false)
			{
				if($newpass==$cpass)
				{
					$user->pass=sha1($newpass.$user->salt);
					$user->save();
					$this->flash->success('Successful Change!');
					return $this->response->redirect("login");
				}
				$this->flash->error('Passwords Do Not Match');
			}
			else
			{
				$this->flash->error('Bhak Chutiya!');
			}
		}

		return $this->response->redirect("login");
				
	}
}
?>
