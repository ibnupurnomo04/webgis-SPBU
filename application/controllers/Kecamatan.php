<?php

class Kecamatan extends CI_Controller {



    public function index()
    {
        //------------------PETA KECAMATAN----------------------

        $data = array(
            'title'         =>'Peta kecamatan Malang Raya',
            'isi'           => 'v_kecamatan'
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
    }
    
    
}

/* End of file Controllername.php */
