<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setTitle('insertBefre before 차이');
$b->setLayout('sub');
$b->setTag('#insertBefre #before');

require_once $b->getPage();
?>