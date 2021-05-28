<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->page->setTitle('test');
$B->page->setLayout('sub');

require_once $B->page->getPage();
?>