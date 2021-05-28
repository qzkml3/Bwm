<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->page->setTitle('본문');
$B->page->setLayout('');
$B->setTag('#본문');

require_once $B->page->getPage();
?>