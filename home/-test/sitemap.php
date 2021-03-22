<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->setTitle('test');
$B->setLayout('sub');

require_once $B->getPage();
?>