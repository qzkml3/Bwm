<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$site->setLayout('sub');
$site->setTitle('제목');

require_once $site->getPage();
?>