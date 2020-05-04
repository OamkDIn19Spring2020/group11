<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function register()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules("username","Username","required|alpha_numeric");
		$this->form_validation->set_rules("password","Password","required|alpha_numeric");
		$this->form_validation->set_rules("email","Email","required|valid_email");
		$this->form_validation->set_rules("phone","Phone","required|numeric");
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('adminpanel/Re_view');
		}
		else 
		{
			$data_user = array('username'=>$this->input->post('username'),
								'password'=>md5($this->input->post('password')),
								'email'=>$this->input->post('email'),
								'phone'=>$this->input->post('phone'));
			$data_doctor = array('name'=>$this->input->post('username'),
								'email'=>$this->input->post('email'),
								'phone'=>$this->input->post('phone'));
			$this->load->model('Common_model');
			$this->Common_model->insert_user($data_user);
			$this->Common_model->insert_doctor($data_doctor);
			$this->load->view('adminpanel/dashboard_admin');			
			echo "inserted";
		}
	}

	public function viewdoctor()
	{
		$this->load->model('Common_model');
		$data['docArray'] = $this->Common_model->return_doctor();
		$this->load->view('adminpanel/viewdoc', $data);
	}

	public function viewpatient()
	{
		$this->load->model('Common_model');
		$data['paArray'] = $this->Common_model->return_patient();
		$this->load->view('adminpanel/viewpa', $data);
	}

	public function showbook()
    {
        $this->load->model('Common_model');
        $data['bookArray'] = $this->Common_model->return_book();
        $this->load->view('adminpanel/viewbook', $data);
    }
}