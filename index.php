<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->page->setLayout('sub');
$B->page->setTitle('');

$v = $B->page->getPage();

require_once $B->page->getPage();
?>