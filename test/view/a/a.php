<?php
$_site_root = '/test';
require_once $_SERVER['DOCUMENT_ROOT'] . $_site_root . '/pre-proc.php';
$_page->setLayout('');
$_page->setTitle('a');
$_view = $_page->getView('.html');
require_once $_site_conf->getLayoutDir() . '/layout.php';
//$_page->showPage();
require_once $_SERVER['DOCUMENT_ROOT'] . $_site_root . '/post-proc.php';
?>