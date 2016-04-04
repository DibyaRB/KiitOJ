<?php


class PracticeController extends ControllerBase
{

    public function indexAction()
    {
        
    }

    public function submitAction()
	{
if ($this->request->isPost()) {
		
		$code=$this->request->getPost('prog');
		$lng=$this->request->getPost('lang');
		//echo $lng;
		
	
		$input = '10 20';
		//echo $code;
		//$code = 'a,b = map(int,raw_input().split())
		//print (a+b)';
		//$url = 'http://api.hackerrank.com/checker/submission.xml';
		$key = 'hackerrank|279060-668|76af1d441b6c77026169d7b778427ade13fd8c72';	
//		$cd=urlencode($code);
//		echo $cd;
		//extract data from the post
		extract($_POST);

		//set POST variables
		$url = 'http://api.hackerrank.com/checker/submission.json';
		$fields = array(
		'source' => htmlspecialchars(urlencode($code)),
		'testcases' => urlencode(json_encode(array($input))),
		'lang' => $lng,
		'api_key' => urlencode($key)

		);

		//url-ify the data for the POST
		foreach($fields as $key=>$value)

		{ $fields_string .= $key.'='.$value.'&'; }
		rtrim($fields_string, '&');

		//echo htmlspecialchars($fields_string,ENT_QUOTES);		

		//open connection
		$ch = curl_init();

//		//set the url, number of POST vars, POST data
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_POST, count($fields));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		//execute post
		$result = curl_exec($ch);
		//print_r($result);
		$res=json_decode($result, true);
		$this->view->res=$res;
		//close connection
		curl_close($ch);


	}
	}
}

