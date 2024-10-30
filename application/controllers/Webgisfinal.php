<?php



class Webgisfinal extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('m_spbu');
                $this->load->model('m_kantorkec');
                
        

        }

        public function index()
        {
                $data = array(
                'title'         =>'Pemetaan SPBU Malang',
                'spbu'          => $this->m_spbu->tampil(),
                'kantorkec'     => $this->m_kantorkec->tampil(),
                'isi'           =>'v_webgisfinal'

        
        );
        $this->load->view('frontend/v_wrapper',$data, FALSE);
        }

}

/* End of file Controllername.php */