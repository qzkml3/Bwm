<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->page->setLayout('sub');
$B->page->setTitle('$b.result(); #script result');

require_once $B->page->getPage();
?>