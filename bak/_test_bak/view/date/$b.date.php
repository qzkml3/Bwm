<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->setLayout('sub');
$B->setTitle('#date #날짜 #$b.date');

require_once $B->getPage();
?>
