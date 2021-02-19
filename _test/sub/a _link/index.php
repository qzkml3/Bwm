<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$b->setTitle($b->file->getFolderName());
$b->setLayout('');

require_once $b->getPage();
?>