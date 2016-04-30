<?php

use Phalcon\Mvc\Controller;

class TeachercontestController extends ControllerBase
{

    public function initialize()
    {
        $this->tag->setTitle('Contests');
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
        $auth = $this->session->get('auth');
	$t_id = $auth[t_id];

	$ques = Contest::find(array(
                "(t_id = :tid:)",
                'bind' => array('tid' => $t_id)
            ));
	$this->view->contests=$ques;
    }

    public function addAction()
    {
	$auth = $this->session->get('auth');
	$t_id = $auth[t_id];

	$ques = Question::find(array(
                "(t_id = :tid: AND q_visible = 0)",
                'bind' => array('tid' => $t_id)
            ));
	$this->view->ques=$ques;

        if ($this->request->isPost()) 
	{
		$auth = $this->session->get('auth');

		$cname=$this->request->getPost('cname');
		$info=$this->request->getPost('info');
		$duration=$this->request->getPost('duration');
		$date=$this->request->getPost('date');
		$question=$this->request->getPost('question');

		$con=new Contest();
		$con->name=$cname;
		$con->info=$info;
		$con->date=$date;
		$con->duration=$duration;
		$con->t_id=$t_id;

	if ($con->save() == false) {
				foreach ($con->getMessages() as $message) {
				    echo $message;
						}

	}
		
	else
		{
	
		foreach($question as $quest)
			{
			$qu=new Contestquestion();
			$qu->contest_id=$con->contest_id;
			$qu->q_id=$quest;
		if ($qu->save() == false) {
				foreach ($qu->getMessages() as $message) {
				    echo $message;
						}

			}

			//echo $question;
		}


		}
	}
	
    }

    public function viewAction()
    {
        
    }

    public function editAction()
    {
       	
	 
    }

    public function deleteAction($cid)
    {
        $quesid=Contestquestion::findFirst(array(
				"conditions" => "contest_id = '$cid'"));
		while($quesid!=null)
	{
	$quesid->delete();
	$quesid=Contestquestion::findFirst(array(
				"conditions" => "contest_id = '$cid'"));
	}

	$quesid=Contest::findFirst(array(
			"conditions" => "contest_id = '$cid'"));
		$quesid->delete();

	$this->response->redirect('teacherdashboard');
    }

    public function reportAction()
    {
        
    }
}

