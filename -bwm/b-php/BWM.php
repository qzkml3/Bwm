<?php
namespace Bwm;

require_once $_SERVER['DOCUMENT_ROOT'] . '/home/class/conf/SiteConf.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/-bwm/b-php/page/Page.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/-bwm/b-php/inc/Inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/-bwm/b-php/file/File.php';

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
	private $title;
	private $view;
	
	private $tag;

	function __construct() {
		$this->site_conf = new SiteConf();
		$this->page = new Page($this->site_conf);
		$this->inc = new Inc();
		$this->file = new File();
		
		$this->setErrConf();
	}
	
	function setTag($tag) {
		if ($tag != null) {
			$this->$tag = $tag;
		}
	}
	
	private function setErrConf() {
		ini_set('display_errors', 1);
		error_reporting(E_ERROR | E_COMPILE_ERROR | E_PARSE);	
	}
	
	function setLayout($layout) {
		$this->layout = $layout;
	}
	function getLayout() {
		$v = $this->layout;
		return $v;
	}

	# title
	function setTitle($title) {
		$this->title = $title;
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
	
	function getTitle() {
		if ($this->title) {
			$title = $this->title . ' : ' . $this->getSiteName();
		} else {
			$title = $this->getSiteName();
		}
		return $title;
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
	
	function addTag($tags) {
		$v = str_replace(' ', '', $tags);
		$v = explode(',', $v);
		
		$rtn = '';
		foreach($v as $v2) {
			$rtn .= '<a class="b_btn_green">#'. $v2 . '</a> ';
		}
		
		$this->tag .= $rtn;
	}

	function getTag($tags) {
		return $this->tag;
	}
}