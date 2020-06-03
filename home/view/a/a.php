<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setLayout('sub');
$b->setTitle('a');

$testSvc = new TestSvc();

$testSvc->getTestList();

require_once $b->getPage();
?>