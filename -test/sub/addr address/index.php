<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';
$B->page->setLayout('sub');
$B->page->setTitle('주소');
$B->setTag('#주소 #addr');

require_once $B->page->getPage();
?>