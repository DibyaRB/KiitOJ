<?php

class TeacherquesController extends ControllerBase
{

    public function initialize()
    {
        $this->tag->setTitle('Questions');
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

     public function addAction()
     {
	$this->view->name="Chirag Chinmay";
     }
}
?>