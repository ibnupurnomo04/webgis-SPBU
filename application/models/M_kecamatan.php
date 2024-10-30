<?php

class M_kecamatan extends CI_Model {

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tbl_kecamatan');
        return $this->db->get()->result();

        
        
    }



}

/* End of file ModelName.php */