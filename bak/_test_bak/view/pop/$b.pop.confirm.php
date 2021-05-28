<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->page->setLayout('sub');
$B->page->setTitle('#Confirm #확인창 $b.pop.confirm');

require_once $B->page->getPage();
?>
