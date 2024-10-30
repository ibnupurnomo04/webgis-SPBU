<?php



class Signup extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_signup');
    }

    public function index()
    {
        $data = array(
            

    
    );
    $this->load->view('v_signup',$data, FALSE);
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


            );
            $this->load->view('v_signup', $data, FALSE);
        }else {
            $data = array(
                            'nama_user'     => $this->input->post('nama_user'),
                            'username'      => $this->input->post('username'),
                            'password'      => $this->input->post('password'),
                            
            );
            $this->m_signup->simpan($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan silahkan login');
            redirect('signup');
            
            
        }
    }


}

/* End of file Controllername.php */
