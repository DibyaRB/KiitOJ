<?php
class PracticeController extends ControllerBase
{

    public function initialize()
    {
        $this->tag->setTitle('Practice');
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

    public function answerAction($qid)
    {
        $ques = Question::findFirst(array(
                "(q_id = :qid:)",
                'bind' => array('qid' => $qid)
            ));
	$this->view->ques=$ques;
    }

    public function submitAction()
	{
if ($this->request->isPost()) {

		$auth = $this->session->get('auth');
		
		$code=$this->request->getPost('answer');
		$qid=$this->request->getPost('qid');
		$lng=$this->request->getPost('lang');
		$input=Testcase::findFirst(array(
				"conditions" => "q_id = '$qid'"));

		//print_r($input);
		
		//$code = 'a,b = map(int,raw_input().split())
		//$url = 'http://api.hackerrank.com/checker/submission.xml';
		$key = 'hackerrank|279060-668|76af1d441b6c77026169d7b778427ade13fd8c72';	
		//extract data from the post
		extract($_POST);

		//set POST variables
		$url = 'http://api.hackerrank.com/checker/submission.json';
		$fields = array(
		'source' => htmlspecialchars(urlencode($code)),
		'testcases' => urlencode(json_encode(array($input->t_input))),
		'lang' => urlencode($lng),
		'api_key' => urlencode($key)

		);

		//url-ify the data for the POST
		foreach($fields as $key=>$value)

		{ $fields_string .= $key.'='.$value.'&'; }
		rtrim($fields_string, '&');

		//open connection
		$ch = curl_init();
	//set the url, number of POST vars, POST data
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_POST, count($fields));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		//execute post
		$result = curl_exec($ch);
		//print_r($result);
		$res=json_decode($result, true);

		

		if ($res['result']['compilemessage'] != '')
		{
			$op="<center><h3>Compilation Error.</h3> <br>".$res['result']['compilemessage']."</center>";
		$uq=new Userquestion();
		$uq->q_id=$qid;
		$uq->success=0;
		$uq->roll_no=$auth[roll_no];
		$uq->save();

		}
		elseif ($res['result']['message'][0] != 'Success')
			{

			$op="<center><h3>Runtime Error.</h3> <br>".$res['result']['message'][0]."</center>";
		$uq=new Userquestion();
		$uq->q_id=$qid;
		$uq->success=0;
		$uq->roll_no=$auth[roll_no];
$uq->save();


			}
		else
		{					
			if($res['result']['stdout']['0']==$input->t_output)
				{
				$op="<center> <h3> Solution Accepted </h3> </center>";
		$uq=new Userquestion();
		$uq->q_id=$qid;
		$uq->success=1;
		$uq->roll_no=$auth[roll_no];
		$uq->save();
		
		$rl=$auth[roll_no];
		$ques = Question::findFirst(array("conditions"=> "q_id = '$qid'"));
		$score=$ques->q_score;
		
		$user=User::findFirst(array("conditions" => "roll_no='$rl'"));
		$user->score+=$score;
		$user->save();
				



					}
			else
				{
				$op="<center> <h3> Wrong Answer. </h3> </center>".$input->t_output."   ".$res['result']['stdout']['0'];
		$uq=new Userquestion();
		$uq->q_id=$qid;
		$uq->success=0;
		$uq->roll_no=$auth[roll_no];
		
		$uq->save();
		
	
}	
				
		}
		//close connection
		curl_close($ch);
		$this->view->op=$op;

	}
	}
}

