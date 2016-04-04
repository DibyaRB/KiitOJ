<?php

/**
 * SessionController
 *
 * Allows to register new users
 */

class SignupController extends ControllerBase
{
    public function initialize()
    {

        $this->tag->setTitle('Sign Up');
        parent::initialize();
    }

    /**
     * Action to register a new user
     */
   	//Displays basic page and Signups a user.
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
		//If the form is posted to this action then it runs.
		if($this->request->isPost())
		{
			//Get all posted values from form.
			$rollno=$this->request->getPost('roll');
			$name=$this->request->getPost('name');
			$email=$this->request->getPost('email');
			$pass=$this->request->getPost('pass');
			$cpass=$this->request->getPost('cpass');
			
			//check if a user exists with this email address.
			
			$user = User::findFirst(array(
              		  "(u_email = :email:)",
                	  'bind' => array('email' => $email)
           		 ));
			if($user==false)
			{
				//check if passwords and confirm passwords match.
				if ($pass == $cpass)
				{
					//Set salt and generate password combining user password and salt.
					
					$password=$pass;
					//Create row in database by invoking corresponding Model Class. Set all required coloumn values accordingly.
					$user=new User();
					$user->name=$name;
					$user->u_email=$email;
					$user->pass=$pass;
					
					$user->roll_no=$rollno;
					//Save the row in the database.
					if ($user->save()==0) {
						foreach ($user->getMessages() as $message) {
				  		  echo $message;
			     			}
					}
					else
					{
						$this->response->redirect('login');
					}
				}
				else
				{
					echo "Passwords don't match";
				}
			}
			else
			{
				echo "Already Registered";
			}
		}
	}


}





