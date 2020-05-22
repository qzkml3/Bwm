<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/test/load_bwm.php';

$b->setLayout('sub');
$b->setTitle('');

require_once $b->getPage();
?>