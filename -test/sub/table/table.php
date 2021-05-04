<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->setTitle($B->getTitFromUrl());
$B->setLayout('sub');
$B->setTag('');

require_once $B->getPage();
?>

