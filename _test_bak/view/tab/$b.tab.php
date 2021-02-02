<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setLayout('sub');
$b->setTitle('$b.tab');

require_once $b->getPage();
?>