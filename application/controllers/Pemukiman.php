<?php

class Pemukiman extends CI_Controller {



    public function index()
    {
        //------------------PETA KECAMATAN----------------------

        $data = array(
            'title'         =>'pemukiman',
            'isi'           => 'v_pemukiman'
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
    }
    
    
}

/* End of file Controllername.php */