<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$site->setTitle('');
$site->setLayout('sub');
$site->setTag('font');

require_once $site->getPage();
?>