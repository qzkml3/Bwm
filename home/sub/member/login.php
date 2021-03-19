<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$site->setLayout('sub');
$site->setTitle('로그인');

require_once $site->getPage();
?>