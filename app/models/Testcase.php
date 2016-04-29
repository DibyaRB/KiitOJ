<?php

use Phalcon\Mvc\Model;

class Testcase extends Model
{
	public $te_id;

	public $q_id;

	public $t_input;

	public $t_output;

	public function getSource()
	{
		return "Testcase";
	}
}
?>
