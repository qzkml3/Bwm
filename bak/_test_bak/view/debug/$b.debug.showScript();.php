<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->page->setLayout('sub');
$B->page->setTitle('$b.debug.showScript(); #script show to page');

require_once $B->page->getPage();
?>
