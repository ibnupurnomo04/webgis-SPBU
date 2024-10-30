<?php

class M_malangraya extends CI_Model {

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tbl_malangraya');
        return $this->db->get()->result();

        
        
    }



}

/* End of file ModelName.php */