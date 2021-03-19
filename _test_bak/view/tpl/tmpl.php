<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$site->setLayout('sub');
$site->setTitle('tmpl');

require_once $site->getPage();
?>
