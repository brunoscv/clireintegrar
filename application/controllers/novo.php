<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Novo extends MY_Controller {

    public $data;	
	function __construct(){
		parent::__construct();
		$this->_auth();
		
        /* $this->load->model("Financeiro_model");
        $this->load->model("Profissionais_model"); */
        $this->load->model("Pacientes_model");
		$this->load->model("Planos_model");
	}
	
	public function index(){

        //carregue os MODELs necessários aqui
		$id = $this->uri->segment(3);

        $planos = $this->Planos_model->getPlanos();
		$this->data['listaPlanos'] = array();
		foreach ($planos as $plano) {
			$this->data['listaPlanos'][$plano->id] = $plano->nome_plano;
		}

		$paciente = $this->db
						->from("pacientes AS m")
						->where("id", $id)->get()->row();

		if(!$paciente){
			$this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('pacientes/index');
		} else {
			$this->data['item'] = $paciente;
		}
        
    }

    public function atendimentos(){}
    public function guias_abertas(){}
    public function guias_fechadas(){}

}