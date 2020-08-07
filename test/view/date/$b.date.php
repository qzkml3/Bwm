<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setLayout('sub');
$b->setTitle('#date #날짜 #$b.date');

require_once $b->getPage();
?>
