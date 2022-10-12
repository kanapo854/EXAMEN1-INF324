<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class permod extends CI_Model{
	public $ci;
	public $nombre;
	public $fec_nac;
	public $departmento;
	public function __construct(){
		parent::__construct();
	}
	public function get_id($id){
		$this->load->database();
		$query=$this->db->query("SELECT * FROM persona where ci=$id");
		return $query->result();
	}
	public function get(){
		$this->load->database();
		$query=$this->db->query("SELECT * from persona");
		return $query->result();
	}
	public function save($persona){
		$this->load->database();
		$this->db->insert('persona', $persona);
		return $this->db->insert_id();
	}
	public function update($persona, $id){
		$this->load->database();
		$this->db->where('ci',$id);
		return $this->db->update('persona',$persona);
	}
	public function delete($id){
		$this->load->database();
		$query=$this->db->query("DELETE FROM PERSONA WHERE ci=$id");
	}
}
?>
