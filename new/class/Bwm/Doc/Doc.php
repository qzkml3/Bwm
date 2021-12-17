<?php

namespace Bwm\Doc;

use Bwm\D\D;
use Bwm\Url\Url;
use Conf;

class Doc
{
	static $title = '';
	static $layout = '';

	static function setTitle()
	{
		$tit = self::$title;
		
		if ($tit != '') {
			self::$title = $tit . ' : ' . Conf::SITE_NAME;
		} else {
			$v = Url::getFileName() . ' : ' . Conf::SITE_NAME;
			self::$title = $v; 
		}
	}
}