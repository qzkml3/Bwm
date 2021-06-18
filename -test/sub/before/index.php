<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->page->setTitle('insertBefre before 차이');
$B->page->setLayout('sub');
$B->page->setTag('#insertBefre #before');

require_once $B->page->getPage();
?>