<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setLayout('sub');
$b->setTitle('목록');

require_once $b->getPage();
?>