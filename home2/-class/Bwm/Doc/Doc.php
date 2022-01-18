<?php

namespace Bwm\Doc;

use Bwm\Test\B;
use Bwm\Url\Url;
use App\Conf\Conf;

class Doc
{
	static $title = '';
	static $layout = '';

	static function getTitle()
	{
		$tit = self::$title;
		
		if ($tit == 'main') {
			self::$title = Conf::SITE_NAME;
		} else if (! empty($tit)) { // Custom tit.
			self::$title = $tit . ' : ' . Conf::SITE_NAME;
		} else { // Auto tit by file name.
			$v = Url::getFileName() . ' : ' . Conf::SITE_NAME;
			self::$title = $v;
		}
		
		if (B::isLocalhost()) {
			self::$title = urldecode(self::$title);
		}
		return self::$title;
	}
}