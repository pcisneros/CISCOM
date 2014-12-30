<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ciscom extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html  #991681387
	 */
	function __construct()
	{

		parent:: __construct();

		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('ciscom_model');
	
	}

	public function index()
	{
		
		$this->load->view('nav_home');

	}

function irud($data = NULL, $cod_prod = NULL)
	{
		if ($this->input->post('btnsave') == 'Save')

		 {
	
					$data = array (
									'cod_prod' => $this->input->post('cod_prod'),
									'nom_prod' => $this->input->post('nom_prod'),
									'precio' => $this->input->post('precio'),
								  );

						$select = $this->ciscom_model->exist_row($data['cod_prod']);

						if ($select)
						{
							$this->session->set_flashdata('msj','El registro con este código ya existe');
							redirect ('http://172.16.100.66/CISCOM');
						}

						$insert = $this->ciscom_model->insert_prod($data,$data['cod_prod']);

						if ($insert)
						 {
													
							$this->session->set_flashdata('msj','El registro se guardó Satisfactoriamente');
							// redirect ('http://172.16.100.66/CISCOM');
							
						 }

		 } elseif ($this->input->post('btndelete') == 'Delete')

			  {
			 	$data = array (
								'cod_prod' => $this->input->post('cod_prod'),
								'nom_prod' => $this->input->post('nom_prod'),
								'precio' => $this->input->post('precio'),
								);

				$delete = $this->ciscom_model->del($data['cod_prod']);

					if ($delete) 
					{
						$this->session->set_flashdata('msj','El registro se eliminó satisfactoriamente');
						redirect ('http://172.16.100.66/CISCOM');
					}
		 	  } elseif ($this->input->post('btnupdate') == 'Update')
			  		{

			  			$data = array (
								'cod_prod' => $this->input->post('cod_prod'),
								'nom_prod' => $this->input->post('nom_prod'),
								'precio' => $this->input->post('precio'),
								);	

			  			$update = $this->ciscom_model->update_prod($data,$data['cod_prod']);

			  			if ($update) {
			  				$this->session->set_flashdata('msj','El registro se actualizó correctamente');
			  				redirect ('http://172.16.100.66/CISCOM');
			  			}
			  		}
	}

}



	

		 
