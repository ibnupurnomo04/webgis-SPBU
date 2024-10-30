<?php




class Bencana extends CI_Controller {

    public function index()
    {
        $data = array(
            'title'         =>'peta kerentanan bencana',
            'isi'           => 'v_rentan_bencana'
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
    }

}

/* End of file Controllername.php */
