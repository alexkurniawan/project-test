<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pos_budget extends CI_Controller
{
    public function index()
    {
        //$this->load->view('v_pos_budget');
        $this->load->helper('url'); 
        $this->load->database();
        $this->load->model('m_pos_budget');
        $data['pos_budget'] = $this->m_pos_budget->list_data();
        $this->load->view('v_pos_budget',$data);
    }

    public function Input()
    {
        $this->load->helper('form');
        $data['type']="INPUT";
        $this->load->view('v_pos_budget',$data);
    }

    public function Edit()
    {
        $this->load->helper('form');
        
        $this->load->database();
        $this->load->model('m_pos_budget');
        
        $id = $this->input->get('budget');
        $data['budget'] = $this->m_pos_budget->getEdit($id);
        $data['type'] ="EDIT";
        $this->load->view('v_pos_budget',$data);
    }

    public function Post(){
        $this->load->database();
        $this->load->model('m_pos_budget');

        $param = array(
            'alokasi' => $this->input->post('alokasi'),
            'tahun' => $this->input->post('tahun'),
            'bulan' => $this->input->post('bulan'),
            'amount' => $this->input->post('amount'),
            );
        if ($this->input->post('simpan')=="INPUT"){
            $this->m_pos_budget->input($param);
        }else
        if ($this->input->post('simpan')=="EDIT"){
            $id= $this->input->post('id');
            $this->m_pos_budget->edit($param,$id);
        }

        $this->load->helper('url');
        redirect('pos_budget','refresh');
    }

    public function Delete(){
        $this->load->database();
        $this->load->model('m_pos_budget');
        $id = $this->input->get('budget');
        $this->m_pos_budget->delete($id);

        $this->load->helper('url');
        redirect('pos_budget','refresh');
    }
}