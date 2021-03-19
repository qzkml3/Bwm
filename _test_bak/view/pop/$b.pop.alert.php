<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$site->setLayout('sub');
$site->setTitle('#Alert #알럿창 $b.pop.alert');

require_once $site->getPage();
?>
