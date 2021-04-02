<?php
# Site Config
define('SITE_NAME', 'Home');
define('SITE_Id', 'home');

# Web Source
define('SITE_URL', SITE_Id == '' ? '' : '/' . SITE_Id);
define('CSS_URL',  SITE_URL . '/css');
define('JS_URL',  SITE_URL . '/js');

# Local Source 
define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT']);
define('SITE_DIR', ROOT_DIR . SITE_URL);
define('VIEW_DIR', SITE_DIR . '/view');
define('INC_DIR',  VIEW_DIR . '/-inc');