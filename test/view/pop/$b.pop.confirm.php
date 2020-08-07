<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setLayout('sub');
$b->setTitle('#Confirm #확인창 $b.pop.confirm');

require_once $b->getPage();
?>
