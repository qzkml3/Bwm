<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->setLayout('sub');
$B->setTitle('$b.debug.showScript(); #script show to page');

require_once $B->getPage();
?>
