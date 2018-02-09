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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct()
    {
        parent::__construct();
        $this->load->model('crud_model');
	}

	public function index()
	{
		$this->load->view('index');
	}

    public function view()
    {
        $data['crud'] =$this->crud_model->getView();
        $this->load->view('view_data',$data);
	}

    public function add()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $address = $this->input->post('address');
        $data = array(
            'id' => $id,
            'name' => $name,
            'lastname' => $lastname,
            'email' => $email,
            'phone' => $phone,
            'address' => $address
        );
        $insert = $this->crud_model->postNew($data);
	}

    public function update()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $address = $this->input->post('address');
        $data = array(
            'name' => $name,
            'lastname' => $lastname,
            'email' => $email,
            'phone' => $phone,
            'address' => $address
        );
        $update = $this->crud_model->postUpdate(array('id' => $id),$data);
	}

    public function remove()
    {
        $id = $this->input->post('id');
        $this->crud_model->getDelete($id);
	}
}
