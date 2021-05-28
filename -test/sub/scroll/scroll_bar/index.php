<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->page->setTitle('스크롤 바');
$B->page->setLayout('sub');
$B->setTag('');

require_once $B->page->getPage();
?>