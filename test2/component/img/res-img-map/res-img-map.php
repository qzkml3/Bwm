<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->page->setLayout('sub');
$B->page->setTitle($B->getTitFromUrl());

require_once $B->page->getPage();
?>