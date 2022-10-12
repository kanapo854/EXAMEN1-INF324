<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
 		$this->load->model('permod');
		$data['personas']=$this->permod->get();
		$this->load->view('index.php',$data);
	
	}
	public function crear(){
		$this->load->view('crear.php');
	}
	public function store(){
		$this->load->model('permod');
		$ci=$this->permod->save($_POST);
		$this->load->helper('url');
		redirect("http://localhost/Pregunta7/index.php/Welcome/");
	}
	public function editar($id){
		$this->load->model('permod');
		$data['persona']=$this->permod->get_id($id);
		$this->load->view('edit.php', $data);
	}
	public function update($id){
		$this->load->model('permod');
		$ci=$this->permod->update($_POST,$id);
		echo $ci;
		$this->load->helper('url');
		redirect("http://localhost/Pregunta7/index.php/Welcome/");
	}
	public function eliminar($id){
		$this->load->model('permod');
		$resultado=$this->permod->get_id($id);
		if(count($resultado)>0){
			$this->permod->delete($id);
			$this->index();
		}
		$this->load->helper('url');
		redirect("http://localhost/Pregunta7/index.php/Welcome/");
	}
}
