<?php



class Kendaraan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kendaraan');
    }
    
        public function index()
        {
            $data = array(
                'title' =>'Data Kendaraan',
                'kendaraan'  => $this->m_kendaraan->tampil(),
                'isi'   =>'v_datakendaraan'
    
        
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
        }
    
}



/* End of file Controllername.php */
