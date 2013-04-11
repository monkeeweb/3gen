<?php

	set_include_path(ini_get("include_path").".:/home/strategyatwork/public_html/includes");
	
	defined('PS') ? null : define('PS', PATH_SEPARATOR);

	defined('SITE_ROOT') ? null : define('SITE_ROOT', 'home/strategyatwork/public_html');
	
	defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.PS.'includes');
	
	require_once('config.php');
	require_once('functions.php');
	require_once('session.php');
	require_once('database.php');
	require_once('assinante.php');
//	require_once('user.php');
//	require_once(LIB_PATH.DS."phpmailer".DS."class.phpmailer.php");
//	require_once(LIB_PATH.DS."phpmailer".DS."class.smtp.php");
//	require_once(LIB_PATH.DS."phpmailer".DS."language".DS."phpmailer.lang-br.php");

?>