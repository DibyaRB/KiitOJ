<?php

use Phalcon\Mvc\Model;

class Teacher extends Model
{
	public $t_id;

	public $email;

	public $name;

	public $pass;

	public $reset;

	public $salt;

	public $active;

	public function getSource()
	{
		return "Teacher";
	}
}
?>
