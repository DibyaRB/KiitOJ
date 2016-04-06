<?php

class DashboardController extends ControllerBase
{

    public function initialize()
    {
        $this->tag->setTitle('Feed');
	$this->view->setTemplateAfter('sidetop');
        parent::initialize();
    }

     public function indexAction()
     {
	$this->view->name="Chirag Chinmay";
     }
}
?>
