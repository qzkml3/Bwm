<?php

	class BFile
	{
		static function getFullPath() {
			return __FILE__;

		}
		static function getName() {
			return basename($_SERVER['PHP_SELF']);
		}
		static function getFolderList($dir)
		{
			if (is_dir($dir)) {
				if ($dh = opendir($dir)) {
					while (($entry = readdir($dh)) !== false) {
						if ($entry == '.' || $entry == '..')
							continue;
						$subdir = $dir . '/' . $entry;

						if (is_dir($subdir)) {
							$v = $dir . '/' . $entry;
							$files[] = $v;
						}
					}
					natcasesort($files);
					foreach ($files as $v) {
						echo '<li><a href="' . $v . '">' . str_replace('./', '', $v) . '</a></li>';
					}
					closedir($dh);
				}
			}
		}


		private $files = array();

		function getRecurFileList($dir)
		{
			$this->getFileList($dir);
			natcasesort($this->files);
			echo '<ul>';
			foreach ($this->files as $v) {
				echo '<li><a href="' . $v . '">' . str_replace('./', '', $v) . '</a></li>';
			}
			echo '</ul>';
		}

		function getFileList($dir)
		{
			if (is_dir($dir)) {
				if ($dh = opendir($dir)) {
					while (($entry = readdir($dh)) !== false) {
						if ($entry == '.' || $entry == '..')
							continue;
						$subdir = $dir . '/' . $entry;

						if (is_dir($subdir)) {
							$this->getFileList($subdir);
						} else {
							$v = $dir . '/' . $entry;
							$this->files[] = $v;
						}
					}
					closedir($dh);
				}
			}
		}
	}