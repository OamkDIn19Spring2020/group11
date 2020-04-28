<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
  public function index()
  {
      $this->load->library('form_validation');
      // $this->load->helper('form');
      // $this->load->view('adminpanel/Loform');

      //Rules for Validation
      $this->form_validation->set_rules("username","Username","required|alpha_numeric");
      $this->form_validation->set_rules("password","Password",
      "required|alpha_numeric|max_length[10]|min_length[1]");

      if($this->form_validation->run())
      {
      $username=$this->input->post('username');
      // $password=$this->input->post('password');
      $password=md5($this->input->post('password')); //ma hoa password de bao mat tk
      
      ////////luu vo session//////////
      // $this->session->set_userdata($username);
      // $this->session->set_userdata($username);
      ////////////////////////////////

      $this->load->model('Common_model');

        if($this->Common_model->login_action($username,$password))
        {
          $session_data = array('user' => $username);
          $this->session->set_userdata('logged_in',$session_data);

          if($username == 'JohnWick' or $username == 'BlackJack')
            // echo "Welcome!!";
          {
              // $this->load->view('doctor/dashboard_doctor');
            $this->load->view('doctorpanel/dashboard_doctor');
            // echo "bi cai long gi the";
          }
            // redirect(base_url().'doctor/dashboard');
            // redirect(base_url('doctor/dashboard'));
            // redirect('adminpanel/dashboard');
            // $this->load->view('home');
            // header("location: http://localhost/HOSPITAL/home");
          elseif($username == 'admin')
          {
            $this->load->view('adminpanel/dashboard_admin');
          }
            else
          {
            $this->load->view('patient/dashboard_patient');
          }
          
          // $this->load->view('adminpanel/dashboard');
        }
        else
        {
          echo "Please, try again!";
        }
      }
      else
      {
        $this->load->view('adminpanel/Loform');
      }
  }
  public function logout()
  {
    $sess_array = array('user'=>'')  ;
    $this->session->unset_userdata('logged_in',$sess_array);
    
    // $this->load->view('adminpanel/Loform');
    // echo userdata('user');
    $this->load->view('home');
  }
}
?>