<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->setTitle('랜덤');
$B->setLayout('sub');
$B->setTag('#랜덤 #random');

require_once $B->getPage();
?>