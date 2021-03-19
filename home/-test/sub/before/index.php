<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$site->setTitle('insertBefre before 차이');
$site->setLayout('sub');
$site->setTag('#insertBefre #before');

require_once $site->getPage();
?>