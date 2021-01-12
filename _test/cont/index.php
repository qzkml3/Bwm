<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setTitle('본문');
$b->setLayout('');
$b->setTag('#본문');

require_once $b->getPage();
?>