<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$site->setLayout('sub');
$site->setTitle('#Version #버전 #$b.ver();');

require_once $site->getPage();
?>