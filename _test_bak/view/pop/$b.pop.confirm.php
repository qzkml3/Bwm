<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->setLayout('sub');
$B->setTitle('#Confirm #확인창 $b.pop.confirm');

require_once $B->getPage();
?>
