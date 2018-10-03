<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->get_all();
	}
	public function get_all()
	{
			 $data['item'] = $this->service_model->get_all();

			 if (empty($data['item']))
			 {
					 show_404();
			 }

			$this->load->view('service_all', $data);
	 }
	public function insert()
	{
		 $name = $this->input->post('name');
		 $phone = $this->input->post('phone');
		 $address = $this->input->post('address');
		 $email = $this->input->post('email');
		 $data = $arrayName = array(
			  'name' => $name,
				'phone' => $phone,
				'address' => $address,
				'email' => $email
		 );
		 $this->service_model->insert('contacts',$data);
		 $this->load->view('service_all');
	}
}
