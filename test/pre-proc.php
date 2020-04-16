<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/test/-config/SiteConf.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bwm/class/page/Page.php';

$_site_conf = SiteConf::getInstance();
$b_page = new Page();