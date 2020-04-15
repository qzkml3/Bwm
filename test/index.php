<?php
$_site_root = '/test';
require_once $_SERVER['DOCUMENT_ROOT'] . $_site_root . '/pre-proc.php';
Page::setLayout('');
Page::setTitle('');
Page::show('.html');
require_once $_SERVER['DOCUMENT_ROOT'] . $_site_root . '/post-proc.php';
?>