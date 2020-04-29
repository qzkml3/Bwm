<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/test/class/-config/SiteConf.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bwm/class/BWM.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bwm/class/file/File.php';

use BWM\File;
File::getFolderList('./view');


$b = new BWM();