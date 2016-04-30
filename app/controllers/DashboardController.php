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
	$auth = $this->session->get('auth');
	$roll=$auth[roll_no];
	$rowcount = Userquestion::count(
	    array(
		"distinct" => "q_id",
		"conditions" => "roll_no = :roll:",
		"bind" => array(
            'roll' => $roll
        )
	    )
	);
	$concount = Usercontest::count(
	    array(
		"distinct" => "contest_id",
		"conditions" => "roll_no = :roll:",
		"bind" => array(
            'roll' => $roll
        )
	    )
	);
	$score = User::findFirst(
	    array(
		"columns" => "score",
		"conditions" => "roll_no = :roll:",
		"bind" => array(
            'roll' => $roll
        )
	    )
	);

	$phql="SELECT Q.q_name,Q.q_score,Q.q_id,Q.q_type,Uq.success from Question Q join Userquestion Uq on Q.q_id = Uq.q_id where roll_no=".$roll." order by Uq.uq_id DESC"; 
	$userq = $this->modelsManager->executeQuery($phql);

	$phql1="SELECT Q.name,Q.duration,Q.date from Contest Q join Usercontest Uq on Q.contest_id = Uq.contest_id where Uq.roll_no=".$roll." order by Uq.contest_id DESC"; 
	$userc = $this->modelsManager->executeQuery($phql1);

	$this->view->nosquestion=$rowcount;
	$this->view->score=$score;
	$this->view->quest=$userq;
	$this->view->contests=$userc;
	$this->view->noscontest=$concount;
     }

     public function displayAction($type)
	{
	
	$ques = Question::find(array("conditions"=> "q_type = '$type'"));
	$this->view->quest=$ques;

	}
}
?>
