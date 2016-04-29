<?php

class DashboardController extends ControllerBase
{

    public function initialize()
    {
        $this->tag->setTitle('Feed');
	$this->view->setTemplateAfter('sidetop');
	$auth = $this->session->get('auth');
	if($auth[roll_no]==false)
		$this->response->redirect('404');
	else
	{
		$this->view->name = $auth[name];
	}
        parent::initialize();
    }

     public function indexAction()
     {
	
     }
}
?>
