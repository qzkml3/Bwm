<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/test/load-bwm.php';

$b->setLayout('sub');
$b->setTitle('본문 안의 이미지 / 본문 안에 있는 이미지');

require_once $b->getPage();
?>