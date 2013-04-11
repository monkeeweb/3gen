<?php

	function strip_zeros_from_date ($marked_string="") {
		// Primeiro remove os zeros marcados
		$no_zeros = str_replace ('*0', '', $marked_string);
		// Então remove as marcas adicionais
		$cleaned_string = str_replace ('*', '', $no_zeros);
		return $cleaned_string;
	}
	
	function redirect_to ($location = NULL) {
		if ($location != NULL) {
			header ("Location: {$location}");
			exit;
		}
	}
	
	function output_message ($message = "") {
		if (!empty ($message)) {
			return $message;
		} else {
			return "";
		}
	}
	
	function include_layout_template($template = "") {
		include (SITE_ROOT.'\public\layout'.DS.$template);
	}
	
	function datetime_to_text($datetime="") {
		$unixdatetime = strtotime($datetime);
		return strftime("%B %d, %Y at %I:%M %p", $unixdatetime);
	}

?>