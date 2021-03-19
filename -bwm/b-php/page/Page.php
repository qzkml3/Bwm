<?php

namespace Bwm\Page;

class Page {

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
}