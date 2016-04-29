<?php

class TeacherdashboardController extends ControllerBase
{

    public function initialize()
    {
        $this->tag->setTitle('Admin');
	$this->view->setTemplateAfter('teachersidetop');
	$auth = $this->session->get('auth');
	if($auth[t_id]==false)
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
