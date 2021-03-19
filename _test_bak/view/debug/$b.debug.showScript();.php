<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$site->setLayout('sub');
$site->setTitle('$b.debug.showScript(); #script show to page');

require_once $site->getPage();
?>
