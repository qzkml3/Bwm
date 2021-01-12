<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setTitle('랜덤');
$b->setLayout('sub');
$b->setTag('#랜덤 #random');

require_once $b->getPage();
?>