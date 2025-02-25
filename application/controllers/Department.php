<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('logged_in'))
        { 
            redirect(base_url().'login');
        }
    }

    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/add-department');
        $this->load->view('admin/footer');
    }

    public function manage_department()
    {
        $data['content']=$this->Department_model->select_departments();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-department',$data);
        $this->load->view('admin/footer');
    }

    public function insert()
    {
        $this->load->helper('form');
        $this->form_validation->set_rules('txtdepartment', 'Department Name', 'required');
        // $this->form_validation->set_rules('txtcity', 'Department City', 'required');

        $department=$this->input->post('txtdepartment');
        $city=$this->input->post('txtcity');

        if($this->form_validation->run() !== false)
        {
            $data=$this->Department_model->insert_department(array('department_name'=>$department,'city'=>$city));
            if($data==true)
            {
                $this->session->set_flashdata('success', "New Department Added Succesfully"); 
            }else{
                $this->session->set_flashdata('error', "Sorry, New Department Adding Failed.");
            }
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $this->index();
            return false;
        }
    }

    public function update()
    {
        $this->load->helper('form');
        $this->form_validation->set_rules('txtdepartment', 'Department Name', 'required');
        // $this->form_validation->set_rules('txtcity', 'Department City', 'required');

        $id=$this->input->post('txtid');
        $department=$this->input->post('txtdepartment');
        $city=$this->input->post('txtcity');

        if($this->form_validation->run() !== false)
        {
            $data=$this->Department_model->update_department(array('department_name'=>$department,'city'=>$city),$id);
            if($this->db->affected_rows() > 0)
            {
                $this->session->set_flashdata('success', "Department Updated Succesfully"); 
            }else{
                $this->session->set_flashdata('error', "Sorry, Department Update Failed.");
            }
            redirect(base_url()."department/manage_department");
        }else{
            $this->edit($id);
            return false;
        }
    }


    function edit($id)
    {
        $data['content']=$this->Department_model->select_department_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit-department',$data);
        $this->load->view('admin/footer');
    }


    function delete($id)
    {
        $data=$this->Department_model->delete_department($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Department Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Department Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }



}
