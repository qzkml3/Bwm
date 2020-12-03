<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setLayout('sub');
$b->setTitle('$b.debug.showScript(); #script show to page');

require_once $b->getPage();
?>
