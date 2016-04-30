<?php

use Phalcon\Mvc\Model;

class Usercontest extends Model
{
	public $roll_no;

	public $contest_id;

	public function getSource()
	{
		return "Contest_User";
	}
}
?>
