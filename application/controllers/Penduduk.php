<?php



class Penduduk extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_penduduk');
    }
    
        public function index()
        {
            $data = array(
                'title' =>'Data Kependudukan Malang Raya',
                'penduduk'  => $this->m_penduduk->tampil(),
                'isi'   =>'v_datapenduduk'
    
        
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
        }
    
}
