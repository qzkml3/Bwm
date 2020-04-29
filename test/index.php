<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/test/load-bwm.php';
require_once '가.php';

$b->layout('sub');
$b->title('');

require_once $b->page();
?>