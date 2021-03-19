<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$site->setTitle('랜덤');
$site->setLayout('sub');
$site->setTag('#랜덤 #random');

require_once $site->getPage();
?>