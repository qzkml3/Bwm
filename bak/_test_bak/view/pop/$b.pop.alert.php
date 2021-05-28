<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->page->setLayout('sub');
$B->page->setTitle('#Alert #알럿창 $b.pop.alert');

require_once $B->page->getPage();
?>
