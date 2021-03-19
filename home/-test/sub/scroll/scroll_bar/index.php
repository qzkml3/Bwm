<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$site->setTitle('스크롤 바');
$site->setLayout('sub');
$site->setTag('');

require_once $site->getPage();
?>