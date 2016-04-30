<?php

use Phalcon\Mvc\Model;

class Userquestion extends Model
{
	public $uq_id;

	public $roll_no;

	public $q_id;

	public $success;

	public function getSource()
	{
		return "User_Question";
	}
}
?>
