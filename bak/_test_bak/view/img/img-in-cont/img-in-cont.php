<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->page->setLayout('sub');
$B->page->setTitle('$b.img.imgInCont #img-in-cont #본문 안의 이미지');

require_once $B->page->getPage();
?>