<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setLayout('sub');
$b->setTitle('#Alert #알럿창 $b.pop.alert');

require_once $b->getPage();
?>
