<?php
$b_site_root_dir = $_SERVER['DOCUMENT_ROOT'] . '/test';
require_once $b_site_root_dir . '/pre-proc.php';

$b_page->setLayout('');
$b_page->setTitle('a');

$b_view = $b_page->getView('.html');
require_once $b_page->getPage('/layout.php');

require_once $b_site_root_dir . '/post-proc.php';
?>