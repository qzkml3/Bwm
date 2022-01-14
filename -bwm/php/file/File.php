<?php

namespace Bwm\File;

class File {
    private $files = array();

    /** get Recursive file list*/
	function getRecFileList($dir) {
	    $list = [];
	    
		$this->getFileList($dir);
		natcasesort($this->files);
		
		foreach ($this->files as $v) {
		    array_push($list, '/' . $v);			
		}
		
		return $list;
	}

	function getFileList($dir = '.') {
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
