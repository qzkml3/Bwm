<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->setLayout('sub');
$B->setTitle($B->getTitFromUrl());

require_once $B->getPage();
?>