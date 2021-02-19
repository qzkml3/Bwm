<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';
$b->setLayout('sub');
$b->setTitle('주소');
$b->setTag('#주소 #addr');

require_once $b->getPage();
?>