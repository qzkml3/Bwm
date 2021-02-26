<?php
spl_autoload_register('b_loadBwm');
spl_autoload_register('b_loadConf');
spl_autoload_register('b_loadSvc');

function b_loadBwm($class) {
	$dir = $_SERVER['DOCUMENT_ROOT'] . '/-bwm/class';
	b_loadAuto($dir, $class);
}

function b_loadConf($class) {
	$dir = $_SERVER['DOCUMENT_ROOT'] . '/home/class/-bwm-conf';
	b_loadAuto($dir, $class);
}

function b_loadSvc($class) {
	$dir = $_SERVER['DOCUMENT_ROOT'] . '/home/class/svc';
	b_loadAuto($dir, $class);
}

function b_loadAuto($dir, $class) {
	$class = explode('\\', $class . '.php');
	$class = end($class);
	$path = $dir . '/' . $class;
	
	if (file_exists($path)) {
		require_once $path;
	}

	//echo $path . '<br>'; //test
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/-bwm/class/file/File.php';;

$B = new bwm\BWM();
$B->site_conf = new bwm\conf\SiteConf();
$B->file = new bwm\file\File();

$B->file->getFileName();