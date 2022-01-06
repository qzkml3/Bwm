<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->page->setTitle($B->getTitFromUrl());
$B->page->setLayout('sub');
$B->page->setTag('');

require_once $B->page->getPage();
?>

