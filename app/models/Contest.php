<?php

use Phalcon\Mvc\Model;

class Contest extends Model
{
	public $contest_id;

	public $name;

	public $info;

	public $t_id;

	public $date;

	public $duration;


	public function getSource()
	{
		return "Contest";
	}
}
?>
