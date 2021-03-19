<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';
$site->setLayout('sub');
$site->setTitle('주소');
$site->setTag('#주소 #addr');

require_once $site->getPage();
?>