<?php

class Kantorkec extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kantorkec');
    }
    
        public function index()
        {
            $data = array(
                'title'         =>'Data kantor kecamatan',
                'kantorkec'     => $this->m_kantorkec->tampil(),
                'isi'           =>'v_datakantorkec'
    
        
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
        }
    
}



/* End of file Controllername.php */