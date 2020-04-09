<?php
# Site Config
define('SITE_NAME', 'Home');
define('SITE_FOLDER', 'home');

# URL Config
define('SITE_URL', SITE_FOLDER == '' ? '' : '/' . SITE_FOLDER);

# Dir Config 
define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT']);
define('SITE_DIR', ROOT_DIR . SITE_URL);
define('VIEW_DIR', SITE_DIR . '/view');
define('INC_DIR',  VIEW_DIR . '/-inc');