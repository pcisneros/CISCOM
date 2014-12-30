<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Venta extends CI_Controller {

		function __construct()
		{
			parent:: __construct();

			$this->load->library('calendar');
			$this->load->model('venta_model');
			$this->load->helper (array('form','url'));
			$this->load->library ('form_validation');
			$this->load->library('session');
			
		}
		public function index()
			{
				$this->load->view('ciscom/frm_2');
			}

		function irud($data = NULL, $cod_ven = NULL)

		{
				$data['ventas'] = $this->venta_model->getTable(); 
				$this->load->view('ciscom/frm_2',$data);

			if ($this->input->post('btnsave') == 'Save')
				{

					$data = array(
						'cod_ven' => $this->input->post('cod_ven'),
						'cliente' => $this->input->post('cliente'),
						'fecha' => date('Y-m-d H:i:s'),
						);

					$select = $this->venta_model->exists_row($data['cod_ven']);

					if ($select) {
						$this->session->set_flashdata('msj','<b>¡Error!</b>, El codigo de esta venta ya se encuentra registrada, intente con un nuevo código');
						// redirect('http://localhost/CISCOM/');
					}

					$insert = $this->venta_model->Save($data);
					if ($insert) {
						$this->session->set_flashdata('msj',' <b>¡Éxito!</b>, Los datos de la venta se guardaron satisfactoriamente');
						// redirect('http://localhost/CISCOM/');
					}
				}

				elseif ($this->input->post('btnupdate') == 'Update') 
				{
					$data = array(
						'cod_ven' => $this->input->post('cod_ven'),
						'cliente' => $this->input->post('cliente'),
						'fecha' => date('Y-m-d H:i:s'),
						);

					$update = $this->venta_model->Update($data,$data['cod_ven']);

					if ($update) {
						$this->session->set_flashdata('msj',' <b>¡Éxito!</b>, Los datos de la venta se actualizaron satisfactoriamente');
						// redirect('http://localhost/CISCOM/');
					}
				}

				elseif ($this->input->post('btndelete') == 'Delete')
				{
					$data = array(
						'cod_ven' => $this->input->post('cod_ven'),
						'cliente' => $this->input->post('cliente'),
						'fecha' => date('Y-m-d'),
						);

					$consul = $this->venta_model->exists_row($data['cod_ven']);

					if ($consul == FALSE) {
						$this->session->set_flashdata('msj','<b>¡Error!</b>, El codigo de esta venta no existe en la base de datos');
						// redirect('http://localhost/CISCOM/');
					}

					$delete = $this->venta_model->Delete($data['cod_ven']);

					if ($delete) {
						$this->session->set_flashdata('msj','<b>¡Éxito!</b>, Los datos de la venta se eliminaron satisfactoriamente');
						// redirect('http://localhost/CISCOM/');
					}
				}
				
		}

}