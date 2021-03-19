<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$site->setTitle('본문');
$site->setLayout('');
$site->setTag('#본문');

require_once $site->getPage();
?>