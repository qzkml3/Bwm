<?php

use Bwm\Str\Str;

require_once $_SERVER["DOCUMENT_ROOT"] . "/home2/-/class/App/Conf/Conf.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/home2/-/class/Bwm/D/D.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/home2/-/class/Bwm/Inc/Inc.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/home2/-/class/Bwm/Doc/Doc.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/home2/-/class/Bwm/Auth/Auth.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/home2/-/class/Bwm/Str/Str.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/home2/-/class/Bwm/Url/Url.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/home2/-/class/Bwm/File/File.php";

$uri = $_SERVER['REQUEST_URI'];

if (Str::hasStr($uri, '?')) {
	$view = Str::getPreStr($uri, '?'); 
} else {
	$view = $uri;
}

if ((!Str::hasStr($view, '.html')) && (!Str::hasStr($view, '.php'))) {
	$view = $view . '/index.html';
}

$control = str_replace('.html', '.php', $view);

include_once $_SERVER['DOCUMENT_ROOT'] . $control;

require_once $_SERVER['DOCUMENT_ROOT'] . '/home2/-/layout/layout.html';
?>