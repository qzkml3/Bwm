<?php

	class BFile
	{
		static function getFileList($dir) {
			if (is_dir($dir)) {
				if ($dh = opendir($dir)) {
					while (($entry = readdir($dh)) !== false) {
						if ($entry == '.' || $entry == '..')
							continue;
						$subdir = $dir . '/' . $entry;

						if (is_dir($subdir)) {
							$v = $dir . '/' . $entry;
							echo '<li><a href="' . $v . '">' . BStr::removeStr($v, 'menu/') . '</a></li>';
						}
					}
					closedir($dh);
				}
			}
		}

		static function getRecurFileList($dir) {
			if (is_dir($dir)) {
				if ($dh = opendir($dir)) {
					while (($entry = readdir($dh)) !== false) {
						if ($entry == '.' || $entry == '..')
							continue;
						$subdir = $dir . '/' . $entry;

						if (is_dir($subdir)) {
							self::getRecurFileList($subdir);
						} else {
							$v = $dir . '/' . $entry;
							echo '<li><a href="' . $v . '">' . BStr::removeStr($v, 'menu/') . '</a></li>';
						}
					}
					closedir($dh);
				}
			}
		}
	}