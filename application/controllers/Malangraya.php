<?php
 
 
 
 class Malangraya extends CI_Controller {
 
    public function index()
    {
         //------------------PETA MALANG RAYA----------------------
  
        $data = array(
            'title'         =>'Peta Malang Raya',
            'isi'           => 'v_malangraya'
        );
    $this->load->view('layout/v_wrapper',$data, FALSE);

    }
 
 }
 
 /* End of file Controllername.php */
 