<?php
Class TestController
{
	public function test()
	{

		$model = new AbstractModel();

		$result = $model->selectQuery('Education');

		
		include ('././view/TestView.php');

	}
}
