<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->page->setLayout('sub');
$B->page->setTitle('회원가입');

require_once $B->page->getPage();
?>