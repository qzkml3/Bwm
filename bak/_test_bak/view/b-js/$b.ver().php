<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->setLayout('sub');
$B->setTitle('#Version #버전 #$b.ver();');

require_once $B->getPage();
?>