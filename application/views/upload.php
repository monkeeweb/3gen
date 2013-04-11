<div id="container" class="upload">
    <div id="form-container">
	
	<?php

		    if($_POST['subject'] == 'Contato'){
			     
			    $nome = $_POST['nome'];
			    $telefone = $_POST['telefone'];
			    $email = $_POST['email'];
	     
	     $cv = $_FILES["cv"];
			     $to = "fabio@monkee.com.br";
			     
				    
			     if(!preg_match("/\.(doc|pdf){1}$/i", $cv["name"], $ext)){
			     ?>
			     ---------------------
				    ARQUIVO ENVIADO NAO ƒ ACEITO --------------
			     ---------------------
			     <?
			     }elseif($cv["size"] > 2000000){
			      ?>
			     ---------------------
				    ARQUIVO ENVIADO MAIOR QUE 2MB --------------
			     ---------------------
			     <?
			     }else{
				    $fileatt = $_FILES['cv']['tmp_name']; 
				    $fileatt_type = $_FILES['cv']['type']; 
				    $fileatt_name = $_FILES['cv']['name'];
				    if (is_uploaded_file($fileatt)) { 
					    $file = fopen($fileatt,'rb'); 
					    $data = fread($file,filesize($fileatt)); 
					    fclose($file);
				    }
				    //$data = chunk_split(base64_encode( 	file_get_contents("./imgs/bg.jpg") ));
				    
				     $semi_rand = md5(time()); 
				     $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
				    
				    $corpo = "Nome: " . $nome . "<br>";
				    $corpo .= "Telefone: " . $telefone . "<br>";
				    $corpo .= "Email: " . $email . "<br>";
				    
    
				    $headers = "From:" . $nome;
				     $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
				     $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $corpo . "\n\n";
				     $data = chunk_split(base64_encode($data));
				     $message .= "--{$mime_boundary}\n" . "Content-Type: {$fileatt_type};\n" . " name=\"{$fileatt_name}\"\n" . "Content-Disposition: attachment;\n" . " filename=\"{$fileatt_name}\"\n" . "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n" . "--{$mime_boundary}--\n"; 
				    if(  mail($to, '', $message, $headers, '-fcontato@duffbrasil.com.br')){
				    
				    ?>

				    
				    <?
				    
				    }else{
				    ?>
				    -----------------------
				    ERRO
				    -----------------------
				    
				    <?
				    
				    }
				     
				     
			     }
		     }
		    
		    
		    ?>
			       
	
    </div>
    
</div>