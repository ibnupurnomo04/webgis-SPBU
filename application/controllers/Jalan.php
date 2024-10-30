<?php

class Jalan extends CI_Controller {



    public function index()
    {
        //------------------PETA KECAMATAN----------------------

        $data = array(
            'title'         =>'Peta Jalan',
            'isi'           => 'v_jalan'
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
    }
    
    
}

/* End of file Controllername.php */