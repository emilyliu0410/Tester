
<?php

include './controller/controller.php';
include './model/AbstractModel.php';
include './model/connSQL.php';

$controller = new TestController();

$controller->test();
