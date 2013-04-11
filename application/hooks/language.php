<?php

function pick_language() {

	session_start();
	$lang = 'br';

    if (!empty($_GET['lang'])) {    
        $_SESSION['lang'] = $lang = $_GET['lang'];

    } elseif (!empty($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];

    }

    $_SESSION['lang'] = $lang;
	define('CURRENT_LANGUAGE', $lang);
}
