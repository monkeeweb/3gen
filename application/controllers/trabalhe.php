<?php
class Trabalhe extends CI_Controller {

	 public function index() {
        $data['action'] = site_url('trabalhe/envia');
        $data['title'] = '3GEN - Trabalhe conosco'; // Capitalize the first letter
	
		$this->load->view('templates/header', $data);
		$this->load->view('trabalhe', $data);
		$this->load->view('templates/footer', $data);
        
    }

    public function envia(){
    	$this->load->library('email');
    	
    	if($_FILES['curr']["tmp_name"] != ''){
	    	$config['encrypt_name'] = false;
	    	$config['upload_path'] = './uploadsc/';
			$config['allowed_types'] = 'doc|docx|pdf';
			
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('curr')){
			    show_error($this->upload->display_errors());
       			return;
			}else{
			    $upload_data = $this->upload->data();
			    $curr = $upload_data['full_path']; 
			    $this->email->attach($curr);
			}
		}

    	$email = $this->input->post('email', TRUE);
		$nome = $this->input->post('nome', TRUE);

		$this->email->from($email, $nome);
		$this->email->to('carreira@3gen.com.br');

		$this->email->subject('Formulário Trabalhe conosco');
		$this->email->message('<html><head></head><body>
		Nome:       ' . $nome . ' <br />
		E-mail:     ' . $email . ' <br />
		
		</body></html>');

		$em = $this->email->send();
		if ($em) {
			$data['enviado'] = 'Formulário enviado com sucesso. Aguarde nosso contato.';
		} else {
			$data['enviado'] = 'Erro ao enviar o formulário. Favor enviar um e-mail para xxx@xxx.com.br';
		}

		$data['action'] = site_url('trabalhe/envia');
		$data['title'] = '3GEN - Trabalhe conosco'; // Capitalize the first letter
	
		$this->load->view('templates/header', $data);
		$this->load->view('trabalhe', $data);
		$this->load->view('templates/footer', $data);

    }


}
?>