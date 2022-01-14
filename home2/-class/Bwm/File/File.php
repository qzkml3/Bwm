<?php

namespace Bwm\File;

use Bwm\Str\Str;
use Bwm\Test\B;

class File
{
	static function getFolderList($target_dir)
	{
		$dir_list = [];

		if ($opened_dir = opendir($target_dir)) {

			while (($dir_name = readdir($opened_dir)) == true) {
				if ($dir_name == "." || $dir_name == "..") continue;

				if (is_dir($target_dir . "/" . $dir_name)) {
					array_push($dir_list, $dir_name);
				};
			}
		} else {
			B::dwt('Is validate dir?');
			B::dw($target_dir);
		}
		closedir($opened_dir);

		return $dir_list;
	}
	
	static function getFileList($target_dir)
	{
		$dir_list = [];

		if ($opened_dir = opendir($target_dir)) {

			while (($dir_name = readdir($opened_dir)) == true) {
				if ($dir_name == "." || $dir_name == "..") continue;

				if (is_file($target_dir . "/" . $dir_name)) {
					array_push($dir_list, $dir_name);
				};
			}
		} else {
			B::dwt('Is validate dir?');
			B::dw($target_dir);
		}
		closedir($opened_dir);

		return $dir_list;
	}
	
	static function getOnlyExtList($target_dir, $srch_ext) {
		$filtered_list = [];
		$dir_list = self::getFileList($target_dir);
		
		foreach($dir_list as $name) {
			$dir_ext = self::getExt($name);
			if ($dir_ext == $srch_ext) {
				array_push($filtered_list, $name);
			}
		}

		return $filtered_list;
	}
	
	static function getExt($name) {
		$ext = Str::getPostStrRev($name, ".");
		$ext = strtolower($ext);
		return $ext;
	}
}