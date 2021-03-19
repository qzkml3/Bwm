<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$site->setLayout('sub');
$site->setTitle('b_p #padding');

require_once $site->getPage();
?>