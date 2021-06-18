<?php

namespace Bwm\Page;

require_once $_SERVER['DOCUMENT_ROOT'] . '/home/class/conf/SiteConf.php';

use Bwm\Conf\SiteConf;

class Page {
	private $site_conf;
	
	static public $title;
	private $layout;
	
	public function __construct($site_conf)
	{
		$this->site_conf = $site_conf;
	}

	function setTitle($title) {
		$this->title = $title;
	}
	function getTitle($title = '') {
		if ($this->title == '') {
			$title = $this->site_conf->getSiteName(); 
		} else {
			$title = $this->title . ' : ' . $this->site_conf->getSiteName();
		}
		return $title;
	}

	function setLayout($layout) {
		$this->layout = $layout;
	}
	function getLayout() {
		$v = $this->layout;
		return $v;
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

    /**
     * @property getFullDir
     * Get full dir
     */
    function getFullDir() {
        return __FILE__;
    }
    
    /**Get file name and extension*/
    function getFullFileName() {
        $s = $_SERVER['PHP_SELF'];

        $s = substr($s, strrpos($s,'/') + 1);

        $s = substr($s, 0,  strrpos($s,'.'));

        return $s;
    }

    /**Get file name (without extention)*/
    function getFileName() {
        return basename($_SERVER['PHP_SELF']);
    }

    /*Get dir*/
    function getDir() {
        $r = basename(getcwd());

        return $r;
    }

	function setTag($tag) {
		if ($tag != null) {
			$this->$tag = $tag;
		}
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