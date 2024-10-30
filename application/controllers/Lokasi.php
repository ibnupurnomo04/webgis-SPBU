<?php


class Lokasi extends CI_Controller {



    public function index()
    {
        //------------------PETA KECAMATAN----------------------

        $data = array(
            'title'         =>'kesesuian lokasi',
            'isi'           => 'v_lokasi'
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
    }
    
    
}

/* End of file Controllername.php */