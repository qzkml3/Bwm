<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setLayout('sub');
$b->setTitle('$b.img.imgInCont #img-in-cont #본문 안의 이미지');

require_once $b->getPage();
?>