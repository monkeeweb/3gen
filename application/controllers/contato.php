<?php
class Contato extends CI_Controller {

	 public function index() {
        $data['action'] = site_url('contato/envia');
        $data['title'] = '3GEN - Contato'; // Capitalize the first letter
	
		$this->load->view('templates/header', $data);
		$this->load->view('contato', $data);
		$this->load->view('templates/footer', $data);
        
    }

    public function envia(){
    	
    	$this->load->library('email');
    	$email = $this->input->post('email', TRUE);
		$nome = $this->input->post('nome', TRUE);
		$telefone = $this->input->post('telefone', TRUE);
		$empresa = $this->input->post('empresa', TRUE);
		$cargo = $this->input->post('cargo', TRUE);
		$mensagem = $this->input->post('mensagem', TRUE);
		$como = $this->input->post('como', TRUE);

		$this->email->from($email, $nome);
		$this->email->to('contato@3gen.com.br');

		$this->email->subject('Formulário de contato');
		$this->email->message('<html><head></head><body>
		Nome:       ' . $nome . ' <br />
		E-mail:     ' . $email . ' <br />
		Telefone:   ' . $telefone . ' <br />
		Empresa:     ' . $empresa . ' <br />
		Cargo:     ' . $cargo . ' <br />
		Como nos conheceu:    ' . $como . ' <br />
		Mensagem:   ' . $mensagem . ' <br />
		</body></html>');

		$em = $this->email->send();
		if ($em) {
			$data['enviado'] = 'Formulário enviado com sucesso. Aguarde nosso contato.';
		} else {
			$data['enviado'] = 'Erro ao enviar o formulário. Favor enviar um e-mail para xxx@xxx.com.br';
		}

		$data['action'] = site_url('contato/envia');
		$data['title'] = '3GEN - Contato'; // Capitalize the first letter
	
		$this->load->view('templates/header', $data);
		$this->load->view('contato', $data);
		$this->load->view('templates/footer', $data);

    }


}
?>