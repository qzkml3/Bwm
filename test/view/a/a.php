<?php
$_site_root = '/test';
require_once $_SERVER['DOCUMENT_ROOT'] . $_site_root . '/pre-proc.php';
Page::setLayout('');
Page::setTitle('a');
//Page::show('.html');

$v = $_SERVER['PHP_SELF'];
		$v = str_replace('.php', '.html', $v);
		
		echo $v; exit;
		$_view = $_SERVER['DOCUMENT_ROOT'] . $v;
		
		require_once SiteConf::getLayoutDir() . '/layout.php';
require_once $_SERVER['DOCUMENT_ROOT'] . $_site_root . '/post-proc.php';
?>