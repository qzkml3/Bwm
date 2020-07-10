<?php

namespace bwm\file;

class File {
	static function getFullPath() {
		return __FILE__;

	}

	static function getName() {
		return basename($_SERVER['PHP_SELF']);
	}

	static function getFolderList($dir) {
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
				foreach ($files as $v) {
					$v = str_replace('./', '', $v);
					$v = iconv('EUC-KR', 'UTF-8', $v);
					echo '<li><a href="' . $v . '">' . $v . '</a></li>';
				}
				closedir($dh);
			}
		}
	}


	private $files = array();

	function getRecurFileList($dir) {
		$this->getFileList($dir);
		natcasesort($this->files);
		echo '<ul>';
		foreach ($this->files as $v) {
			echo '<li><a href="' . $v . '">' . str_replace('./', '', $v) . '</a></li>';
		}
		echo '</ul>';
	}

	function getFileList($dir) {
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
	
	# Get file name from current web addr (without extention)
	function getFileName() {
		$s = $_SERVER['PHP_SELF'];
		
		$s = substr($s, strrpos($s,'/') + 1);

		$s = substr($s, 0,  strrpos($s,'.'));
		
		return $s;
	}
}