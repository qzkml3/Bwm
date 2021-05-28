<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->page->setLayout('sub');
$B->page->setTitle('#date #날짜 #$b.date');

require_once $B->page->getPage();
?>
