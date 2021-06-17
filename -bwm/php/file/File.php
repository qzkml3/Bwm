<?php

namespace Bwm\File;

class File {
    private $files = array();

	function getFolderList($dir = '.') {
	    $list = [];
	    
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
                    array_push($list, $v);
				}
				closedir($dh);
			}
		}
		
		return $list;
	}

    /** get Recursive file list*/
	function getRcsFileList($dir) {
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
	
	function show($list) {
	    echo '<ul>';
	    foreach($list as $v) {
            echo '<li><a href="' . $v . '">' . str_replace('./', '', $v) . '</a></li>';
        }
        echo '</ul>';
    }

	# Get file name from current web addr (without extention)
	function getFileName() {
		$s = $_SERVER['PHP_SELF'];

		$s = substr($s, strrpos($s,'/') + 1);

		$s = substr($s, 0,  strrpos($s,'.'));

		return $s;
	}
}
