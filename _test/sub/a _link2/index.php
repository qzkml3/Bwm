<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->setTitle($B->file->getFolderName());
$B->setLayout('');

require_once $B->getPage();
?>