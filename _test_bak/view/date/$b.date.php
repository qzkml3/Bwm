<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$site->setLayout('sub');
$site->setTitle('#date #날짜 #$b.date');

require_once $site->getPage();
?>
