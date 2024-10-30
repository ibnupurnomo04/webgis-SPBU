<?php




class Contact extends CI_Controller {

    public function index()
        {
            $data = array(
                
                'isi'           =>'v_contact'
    
        
        );
        $this->load->view('frontend/v_wrapper',$data, FALSE);
        }
}

/* End of file Controllername.php */
