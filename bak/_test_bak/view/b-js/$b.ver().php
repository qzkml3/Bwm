<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->page->setLayout('sub');
$B->page->setTitle('#Version #버전 #$b.ver();');

require_once $B->page->getPage();
?>