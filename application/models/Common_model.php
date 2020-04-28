<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model
{
    public function login_action($username,$password)
    {
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('user');
        if($query->num_rows()>0)
        {
            return TRUE ;
        }
        else
        {
            return FALSE ;
        }
    }

//////////////////////ADMIN/////////////////
    public function insert_user($data_user)
    {
        $this->db->insert('user',$data_user);
    }

    public function insert_doctor($data_doctor)
    {
        $this->db->insert('doctor',$data_doctor);
    }

    public function return_doctor()
    {
        $this->db->select('name, email, phone');
        $this->db->order_by('name', 'asc');        
        $query = $this->db->get('doctor');
        return $query->result();
    }

    public function return_patient()
    {
        $this->db->order_by('fullname', 'asc');  
        $query = $this->db->get('patient');
        $query->result_array();
        return $query->result();
    }

    public function return_book()
    {      
        $this->db->order_by('Date', 'desc');        
        $query = $this->db->get('book');
        return $query->result();
    }

    public function delete($search)
    {
        $this->db->where('username', $search);
        $this->db->delete('user');
        $this->db->delete('doctor');
    }

//////////////DOCTOR/////////////////
    public function view_schedule()
    {
        $tam = $this->session->userdata['logged_in']['user'];
        $this->db->select('Id_number, Time, Date');        
        $this->db->like('Doctor', $tam, 'before');
        $this->db->order_by('Date', 'desc');
        $query = $this->db->get('book');
        return $query->result();
    }

//////////////PATIENT/////////////////

    public function get_doctor()
    {
        $names = $this->db->get('doctor');
        if( $names->num_rows() >0 )
        {
            return $names->result();
        }
    }

    public function insert_patient($datapatient)
    {
        $this->db->insert('patient',$datapatient);
    }

    public function book($databook)
    {
        $this->db->insert('book', $databook);
    }

    public function register($dataregister,$datauser)
    {
        $this->db->insert('user',$datauser);
        $this->db->insert('patient',$dataregisterer);
    }

    public function return_users()
    {
        $tam = $this->session->userdata['logged_in']['user'];
        $this->db->like('Id_number', $tam, 'both');
        $query = $this->db->get('patient');
        $query->result_array();
        return $query->result();
    }

    public function edit($object)
    {
        $tam = $this->session->userdata['logged_in']['user'];
        $this->db->where('Id_number', $tam);        
        $this->db->update('patient', $object);
    }

    public function viewbook()
    {
        $tam = $this->session->userdata['logged_in']['user'];
        $this->db->where('Id_number', $tam);        
        $this->db->order_by('Date', 'desc');        
        $query = $this->db->get('book');
        return $query->result();
    }
}
?>