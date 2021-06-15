<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->page->setTitle('게시판 목록');
$B->page->setLayout('sub');

require_once $B->page->getPage();
?>
