<?php
//#Site config.
define('SITE_NAME', 'test');
define('SITE_FOLDER', 'test');

//#Path auto set
define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT']);
define('SITE_URL', SITE_FOLDER == '' ? '' : '/' . SITE_FOLDER);
define('SITE_DIR', ROOT_DIR . SITE_URL);