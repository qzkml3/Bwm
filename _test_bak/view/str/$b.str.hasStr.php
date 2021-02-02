<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setLayout('sub');
$b->setTitle('#has string #$b.str.has');

require_once $b->getPage();
?>