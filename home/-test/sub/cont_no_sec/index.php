<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->setTitle('본문');
$B->setLayout('');
$B->setTag('#본문');

require_once $B->getPage();
?>