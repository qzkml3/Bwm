<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setTitle('');
$b->setLayout('sub');
$b->setTag('');

require_once $b->getPage();
?>