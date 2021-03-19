<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$site->setTitle('quick test1');
$site->setLayout('');

require_once $site->getPage();
?>