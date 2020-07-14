<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setLayout('sub');
$b->setTitle('b_fd #field #필드 b_bt #button #버튼');

require_once $b->getPage();
?>