<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setLayout('sub');
$b->setTitle('b_fd b_bt #field #button #필드 #버튼');

require_once $b->getPage();
?>