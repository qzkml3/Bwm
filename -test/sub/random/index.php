<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->page->setTitle('랜덤');
$B->page->setLayout('sub');
$B->setTag('#랜덤 #random');

require_once $B->page->getPage();
?>