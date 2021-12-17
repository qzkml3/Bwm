<?php
use Bwm\Doc\Doc;

require_once $_SERVER['DOCUMENT_ROOT'] . '/new/class/Conf/Conf.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/new/class/Bwm/Doc/Doc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/new/class/Bwm/D/D.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/new/class/Bwm/Str/Str.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/new/class/Bwm/File/File.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/new/class/Bwm/Url/Url.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/new/class/Bwm/Auth/Auth.php';

$uri = $_SERVER['REQUEST_URI'];
$view = explode('?', $uri);
$view = $view[0];
if ((!strpos($view, '.html')) && (!strpos($view, '.php'))) {
	$view = $view . '/index.html';
}

$control = str_replace('.html', '.php', $view);

include_once $_SERVER['DOCUMENT_ROOT'] . $control;
Doc::setTitle();
require_once $_SERVER['DOCUMENT_ROOT'] . '/new/view/inc/layout/layout.html';
?>