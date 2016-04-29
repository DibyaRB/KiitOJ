<?php

use Phalcon\Mvc\Model;

class Question extends Model
{
	public $q_id;

	public $q_name;

	public $q_constraint;

	public $q_description;

	public $q_visible;

	public $q_level;

	public $q_type;

	public $t_id;

	public function getSource()
	{
		return "Question";
	}
}
?>
