<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->setLayout('sub');
$B->setTitle('Home');

require_once $B->getPage();
?>