<?php

	set_include_path(ini_get("include_path").".:/home/strategyatwork/public_html/includes");
	
	require_once('initialize.php');
	
	$allowedFields = array(
		'id',
		'nome',
		'email'
	);
	
	$requiredFields = array(
		'email' => 'O preenchimento do e-mail é obrigatório.'
	);
	
	$errors = array();
	
	foreach ($requiredFields as $fieldname => $errorMsg)
	{
		if (empty($_POST[$fieldname]))
		{
			$errors[] = $errorMsg;
		}
	}
	
	foreach ($_POST as $key => $value)
	{
		if (in_array($key, $allowedFields))
		{
			${$key} = $value;
		}
	}
	
	if (count($errors) > 0)
	{
		$errorString .= '<ul>';
		foreach ($errors as $error)
		{
			$errorString .= "<li>$error</li>";
		}
		$errorString .= '</ul>';
	} else {
		$assinante = new Assinante();
		$page->id = "";
		$assinante->nome = $nome;
		$assinante->email = $email;
		$assinante->receber = true;
		
		if (mysql_num_rows(mysql_query("SELECT id FROM cadastro WHERE email = '$assinante->email'")))
		{
			$session->message("O endereço de e-mail " . $assinante->email . " já está registrado em nosso cadastro.");
			redirect_to('registrar.php');
		}
		else if ($assinante->check_email_address($email))
		{
			if ($assinante && $assinante->create())
			{
				$session->message("O cadastro foi realizado com sucesso.");
				redirect_to('registrar.php');
			} else {
				$session->message("O cadastro não pôde ser realizado. Por favor, tente novamente.");
				redirect_to('registrar.php');
			}
		} else {
			$session->message("O endereço de e-mail fornecido não é válido. É preciso que o e-mail seja válido.");
			redirect_to('registrar.php');
		}
	}
	
	if (isset($database))
	{
		$database->close_connection();
	}

?>