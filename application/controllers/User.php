<?php

class User extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->user_login->cek_login();  //batasan hak akses
    }

    public function index()
    {
        $data = array(
            'title' =>'Data User',
            'user'  => $this->m_user->tampil(),
            'isi'   =>'v_datauser'

    
    );
    $this->load->view('layout/v_wrapper',$data, FALSE);
    }

    //--------------FUNSGI INPUT DATA--------------------
    public function input()
    {
        $this->form_validation->set_rules('nama_user', 'Nama User', 'required', array (
            'required' => '%s mohon diisi !!!'
        ));  
        $this->form_validation->set_rules('username', 'Username', 'required', array (
            'required' => '%s mohon diisi !!!'
        ));  
        $this->form_validation->set_rules('password', 'Password', 'required', array (
            'required' => '%s mohon dipilih !!!'
        )); 

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' =>'INPUT DATA USER',
                'isi'=>'v_input_user' 
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        }else {
            $data = array(
                            'nama_user'     => $this->input->post('nama_user'),
                            'username'      => $this->input->post('username'),
                            'password'      => $this->input->post('password'),
                            
            );
            $this->m_user->simpan($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
            redirect('user/input');
            
            
        }
    }

    //--------------FUNSGI EDIT DATA--------------------

    public function edit($id_user)
    {
        $this->form_validation->set_rules('nama_user', 'Nama User', 'required',array(
            'required' => '%s Mohon Diisi !!!'
        ));
        $this->form_validation->set_rules('username', 'Username', 'required',array(
            'required' => '%s Mohon Diisi !!!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required',array(
            'required' => '%s Mohon Diisi !!!'
        ));
        
        
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' =>'EDIT DATA USER',
                'user'  => $this->m_user->detail($id_user),
                'isi'   =>'v_edit_user' 
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        }else {
            $data = array(
                            'id_user'       => $id_user,
                            'nama_user'     => $this->input->post('nama_user'),
                            'username'      => $this->input->post('username'),
                            'password'      => $this->input->post('password'),
                            
            );
            $this->m_user->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil diperbaharui');
            redirect('user');
            
            
        }
    }

    //--------------FUNGSI DELETE DATA--------------------

    public function delete($id_user)
    {
        $data = array('id_user' =>$id_user);
        $this->m_user->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('user');
    }

}

/* End of file Controllername.php */
