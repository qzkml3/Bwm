<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$site->setLayout('sub');
$site->setTitle('#Confirm #확인창 $b.pop.confirm');

require_once $site->getPage();
?>
