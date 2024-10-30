<?php




class Gravity extends CI_Controller {

    public function index()
    {
        $data = array(
            'title'         =>'wilayah interaksi spasial tinggi',
            'isi'           => 'v_interaksi_spasial'
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
    }

}

/* End of file Controllername.php */
