<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setLayout('sub');
$b->setTitle('#Version #버전 #$b.ver();');

require_once $b->getPage();
?>