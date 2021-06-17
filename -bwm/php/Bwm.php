<?php
namespace Bwm;

require_once $_SERVER['DOCUMENT_ROOT'] . '/-bwm/php/Str/Str.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/class/conf/SiteConf.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/-bwm/php/page/Page.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/-bwm/php/Inc/Inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/-bwm/php/file/File.php';

use Bwm\Str\Str;
use Bwm\Conf\SiteConf;
use Bwm\Page\Page;
use Bwm\Inc\Inc;
use Bwm\File\File;

class Bwm {
	public $site_conf;
	public $page;
	public $inc;
	public $file;

	private $layout;
	private $layout_file;
	private $view;
	
	private $tag;

	function __construct() {
		$this->site_conf = new SiteConf();
		$this->page = new Page($this->site_conf);
		$this->inc = new Inc();
		$this->file = new File();
		$this->str = new Str();
		
		$this->setErrConf();
	}
	
	private function setErrConf() {
		ini_set('display_errors', 1);
		error_reporting(E_ERROR | E_COMPILE_ERROR | E_PARSE);
		//error_reporting(E_ALL);
	}
	
	function setLayout($layout) {
		$this->layout = $layout;
	}
	function getLayout() {
		$v = $this->layout;
		return $v;
	}

	function getTitFromUrl() {
		return $_SERVER['PHP_SELF']; 
	}
	function setTitleByFileName() {
		$this->title = $this->file->getFileName();
	}
	function setTitleByFolderName() {
		$this->title = $this->file->getFileName();
	}

	function getPageTitle() {
		return $this->title;
	}

	# Page that with layout
	function getPage() {
		if ($this->layout_file) {
			$layout = $this->layout_file;
		} else {
			$layout = 'layout.html';
		}
		return $this->site_conf->getLayoutDir() . '/' . $layout;
	}
	
	# Get site name
	function getSiteName() {
		return SiteConf::SITE_NAME;
	}
	
	function postProc() {

	}

	# Page that without layout
	function getView() {
		if ($this->view) {
			$replace = $this->view;
		} else {
			$replace = '.html';
		}

		$v = $_SERVER['PHP_SELF'];
		$v = str_replace('.php', $replace, $v);
		//$v = iconv('UTF-8', 'EUC-KR', $v);
		//$v = iconv('EUC-KR', 'UTF-8', $v);
		$v = urldecode($v);
		//echo $v; exit;
        $v = $_SERVER['DOCUMENT_ROOT'] . $v;
        
        if (!file_exists($v)) {
            throw new \Exception(' [$B : view file not exists]' . $v);
        }
        
		return $v;
	}
}