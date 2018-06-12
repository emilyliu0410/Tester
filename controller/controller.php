<?php
Class TestController
{
	public function test()
	{

		$model = new AbstractModel();

		$result = $model->selectQuery('Education');

		$skill_result = $model->selectQuery('Skills');
		$dskill_result = $model->selectQuery('dSkills');

		$experience_result = $model->selectQuery('Experience');

		include ('././view/TopLevel.php');
		include ('././view/BaseView.php');
		include ('././view/profile.php');
		include ('././view/skill.php');
		include ('././view/education.php');
		include ('././view/experience.php');
		include ('././view/contact.php');
	}
}
