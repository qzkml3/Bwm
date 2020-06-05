<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setLayout('sub');
$b->setTitle('로그인');

require_once $b->getPage();
?>