<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {
    
    public function index()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fullname','Fullname','required|alpha_numeric_spaces');
        $this->form_validation->set_rules('address','Address','required|alpha_numeric_spaces');
        $this->form_validation->set_rules('city','City','required|alpha');
        $this->form_validation->set_rules('dob','D.O.B','required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('idnumber','ID number','required|numeric');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('phone','Phone','required|numeric');
        $this->form_validation->set_rules('password','Password','required|alpha_numeric');

        $data_user = array('username'=>$this->input->post('idnumber'),
                            'password'=>md5($this->input->post('password')),
                            'email'=>$this->input->post('email'),
                            'phone'=>$this->input->post('phone'));
        $datapatient = array('fullname'=>$this->input->post('fullname'),
                            'address'=>$this->input->post('address'),
                            'city'=>$this->input->post('city'),
                            'dob'=>$this->input->post('dob'),
                            'gender'=>$this->input->post('gender'),
                            'id_number'=>$this->input->post('idnumber'),
                            'email'=>$this->input->post('email'),
                            'phone'=>$this->input->post('phone'));        
        if ($this->form_validation->run() ==FALSE) 
        {
            $this->load->view('patient/RePatient_view');
        } 
        else 
        {
            $this->load->model('Common_model');
            $this->Common_model->insert_user($data_user);
            $this->Common_model->insert_patient($datapatient);
            $this->load->view('adminpanel/Loform');
            
        }
    }

    public function book()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('choose', 'Choose', 'required');
        $this->form_validation->set_rules('time', 'Time', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->load->model('Common_model');
        if ($this->form_validation->run() == FALSE) 
        {
            $names = $this->Common_model->get_doctor();
            $this->load->view('patient/Appoint_view',['names'=>$names]);
        } 
        else 
        {
            // $this->load->model('Common_model');
            $databook = array('id_number'=>$this->session->userdata['logged_in']['user'],
                            'category'=>$this->input->post('choose'),
                            'doctor'=>$this->input->post('doctor'),
                            'time'=>$this->input->post('time'),
                            'date'=>$this->input->post('date'));
            $this->Common_model->book($databook);
            $this->session->set_flashdata('message', 'Booking Success');            
            $this->load->view('patient/dashboard_patient');
        }
    }

    public function show()
    {
        $this->load->model('Common_model');
        $data['userArray'] = $this->Common_model->return_users();
        $this->load->view('patient/detail', $data);
    }

    public function edit()
    {
        $this->load->model('Common_model');
        $data['userArray'] = $this->Common_model->return_users();
        $this->load->view('patient/edit', $data);
    }

    public function update()
    {
        $this->load->model('Common_model');        
        $object= array('fullname'=>$this->input->post('fullname'),
                    'address'=>$this->input->post('address'),
                    'city'=> $this->input->post('city'),
                    'dob'=> $this->input->post('dob'),
                    'gender'=> $this->input->post('gender'),
                    'id_number'=> $this->input->post('idnumber'),
                    'email'=> $this->input->post('email'),
                    'phone'=> $this->input->post('phone'));
        $this->Common_model->edit($object);
        $this->load->view('patient/dashboard_patient');
    }

    public function showbook()
    {
        $this->load->model('Common_model');
        $data['bookArray'] = $this->Common_model->viewbook();
        $this->load->view('patient/viewbook', $data);
    }
}

/* End of file Patient.php */

?>