<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$site->setTitle('swiper');
$site->setLayout('sub');
$site->setTag('#스와이퍼 #swiper');

require_once $site->getPage();
?>