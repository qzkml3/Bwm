<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setTitle('스크롤 바');
$b->setLayout('sub');
$b->setTag('');

require_once $b->getPage();
?>