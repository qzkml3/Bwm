<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setTitle('quick test1');
$b->setLayout('');

require_once $b->getPage();
?>