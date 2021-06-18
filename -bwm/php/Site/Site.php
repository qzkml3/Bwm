<?php

namespace Bwm\Site;

use Bwm\Page\Page;
use Bwm\Conf\SiteConf;

class Site
{

	function getTitle($title = '') {
		if (Page::$title == '') {
			$title = SiteConf::getSiteName();
		} else {
			$title = Page::$title . ' : ' . $B->site_conf->getSiteName();
		}
		return $title;
	}

}