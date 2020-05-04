<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller 
{

	public function index()
	{
        $this->load->library('form_validation');
        $this->load->helper('form');

        // $this->form_validation->set_rules("email","Email","required|valid_email");
        // $this->form_validation->set_rules("name","Name","required|alpha");
        // $this->form_validation->set_rules("age","Age","required|numeric");
        // $this->form_validation->set_rules("password","Password","required|alpha_numeric");

        $this->form_validation->set_rules("id","Id_patient","required|numeric");
        $this->form_validation->set_rules("fname","Firstname","required|alpha");
        $this->form_validation->set_rules("lname","Lastname","required|alpha");

        // $this->form_validation->set_rules("id","ID","");
        // $this->form_validation->set_rules("name","Name","");
        // $this->form_validation->set_rules("author","Author","");
        // $this->form_validation->set_rules("isbn","Isbn","");

        // if($this->form_validation->run() == FALSE)
        // {
        //     $this->load->view('patient/form');
        // }
        // else {
        //     echo "dadsasdasdasd";
        // }

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('patient/form');
        }
        else {
            $this->load->model('Common_model');
            $data = array('id_patient' => $this->input->post('id'),
                        'fname' => $this->input->post("fname"),
                        'lname' => $this->input->post("lname"),
                        'sex' => $this->input->post('sex'));
            $this->Common_model->insert_patient($data);
            echo "inserted";
        }
	}
}
?>