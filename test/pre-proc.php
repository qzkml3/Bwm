<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/test/-config/SiteConf.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bwm/class/page/Page.php';


use BWM\SiteConf;
use BWM\Page;

$b_site_conf = SiteConf::getInstance();
$b_page = new Page();