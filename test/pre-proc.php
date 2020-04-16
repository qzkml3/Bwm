<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/test/-config/SiteConf.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bwm/class/page/Page.php';

namespace kkk {
	class Page {
		
	}
}

use BWM\SiteConf as SiteConf;
use BWM\Page as Page;

use kkk\Page as Page2;




$b_site_conf = SiteConf::getInstance();
$b_page = new Page();