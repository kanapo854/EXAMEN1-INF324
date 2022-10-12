<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
 		$this->load->view('welcome_message');
		
	
	}
	public function inicio()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function contacto(){
		$this->load->view('header');
		$this->load->view('contacto');
		$this->load->view('footer');
	}
	public function noticias(){
		$this->load->view('header');
		$this->load->view('noticias');
		$this->load->view('footer');
	}
	public function educacion(){
		$this->load->view('header');
		$this->load->view('educacion');
		$this->load->view('footer');
	}
	public function info(){
		$this->load->view('header2');
		$this->load->view('informatica');
		$this->load->view('footer');
	}
	public function quimi(){
		$this->load->view('header2');
		$this->load->view('quimica');
		$this->load->view('footer');
	}
	public function mat(){
		$this->load->view('header2');
		$this->load->view('matematica');
		$this->load->view('footer');
	}
	public function bio(){
		$this->load->view('header2');
		$this->load->view('biologia');
		$this->load->view('footer');
	}
	public function fis(){
		$this->load->view('header2');
		$this->load->view('fisica');
		$this->load->view('footer');
	}
	public function est(){
		$this->load->view('header2');
		$this->load->view('estadistica');
		$this->load->view('footer');
	}
	/*public function indice2()
	{
		$otronombre = $_GET["otronombre"];
		$datos["minombre"]="Yery";
		$datos["miapellido"]="Encinas";
		$datos["otronombre"]=$otronombre;
		$this->load->view('myvista',$datos);
	
	}*/
}
