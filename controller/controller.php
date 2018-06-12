<?php
Class TestController
{
	public function test()
	{

		$model = new AbstractModel();

		$result = $model->selectQuery('Education');

		$skill_result = $model->selectQuery('Skills');

		include ('././view/TopLevel.php');
		include ('././view/BaseView.php');
		include ('././view/profile.php');
		include ('././view/skill.php');
		include ('././view/education.php');
	}
}
