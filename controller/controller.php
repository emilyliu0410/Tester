<?php
Class TestController
{
	public function test()
	{

		$model = new AbstractModel();

		$education = $model->selectQuery('Education');

		$education = $this->selectQuery($statement, $conn);
		
		include ('././view/TestView.php');

	}
}
