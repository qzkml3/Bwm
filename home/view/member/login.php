<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->page->setLayout('sub');
$B->page->setTitle('로그인');

require_once $B->page->getPage();
?>