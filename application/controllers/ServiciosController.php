<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiciosController extends CI_Controller {

   public function __construct(){
   	 parent::__construct();
   	  $this->load->model('Model','general');
   	  define("TABLE", "servicios");
   }


	public function index()
	{
		$data = $this->general->list__(TABLE);
		$this->load->view('servicios/index' , compact('data'));
	}

	public function add_show(){
		$this->load->view('servicios/add');
	}

	public function add__(){

		$data = array(
          'nombre_ser' => $this->input->post('nombre'),
          'precio_ser' => $this->input->post('precio'),
          'fecha_ser' => $this->input->post('fecha'),
          'descuento_ser' => $this->input->post('descuento'),
		);
		$this->general->add__(TABLE, $data);

		$this->session->set_flashdata('success', 'Servicio agregado correctamente');
		redirect(base_url().'Servicios');
	}

	public function edit_show($id){
       $data = $this->general->show__(TABLE, 'id_ser', $id);
      $this->load->view('servicios/edit', compact('data'));
	}

	public function edit__(){
		$data = array(
          'nombre_ser' => $this->input->post('nombre'),
          'precio_ser' => $this->input->post('precio'),
          'fecha_ser' => $this->input->post('fecha'),
          'descuento_ser' => $this->input->post('descuento'),
		);

		$this->general->update__(TABLE, $data, $this->input->post('id'), 'id_ser');

		$this->session->set_flashdata('edit', 'Servicio editado correctamente');
		redirect(base_url().'Servicios');
	}

	public function delete__($id){
		$this->general->delete__(TABLE, 'id_ser', $id);
		$this->session->set_flashdata('delete', 'Servicio editado correctamente');
		redirect(base_url().'Servicios');
	}


}
