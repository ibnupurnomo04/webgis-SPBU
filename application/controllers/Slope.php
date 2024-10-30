<?php

class Slope extends CI_Controller {

    public function index()
    {
        $data = array(
            'title'         =>'Kemiringan lereng',
            'isi'           => 'v_slope'
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
    }

}

/* End of file Controllername.php */
