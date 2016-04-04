<?php

class UserdetailController extends ControllerBase
{
   public function initialize()
   {
	$this->tag->setTitle('Userdetails');
	parent::initialize();
   }
   
   public function indexAction()
   {	
	
	$auth = $this->session->get('auth');
	
	$uid = $auth[id];
	
	$usr = UserDetails::findFirst(array("u_id = '$uid'"));
	
	
	$form = new UserdetailForm();
	

	$this->tag->setDefault('ufname', $usr->u_fname);
	$this->tag->setDefault('ulname', $usr->u_lname);
	$this->tag->setDefault('email', $usr->email);
	$this->tag->setDefault('uphno', $usr->u_ph_no);
	 
	
	
	
	$this->view->form=$form;
	
   }
	
   public function updateAction()
   {
	if($this->request->isPost())
	{
		$auth = $this->session->get('auth');
		$uid = $auth[id];
		
		$u_fname= $this->request->getPost('ufname',array('string','striptags'));
		$u_lname= $this->request->getPost('ulname',array('string','striptags'));
		$u_ph_no= $this->request->getPost('uphno');
		
		$userdetail= UserDetails::findFirst(array("u_id = '$uid'"));
		$userdetail->u_fname = $u_fname;
		$userdetail->u_lname = $u_lname;
		$userdetail->u_ph_no = $u_ph_no;
		
		if($userdetail->save()==false)
		{
			foreach($userdetails->getMessage() as $message)
			{
				echo $message;
				header('Location: '.$_SERVER["HTTP_REFERER"]);
			}
		}
	header('Location: '.$_SERVER["HTTP_REFERER"]);	
		
	}
   }
}
?>
