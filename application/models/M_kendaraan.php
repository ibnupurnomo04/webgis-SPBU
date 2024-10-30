<?php

class M_kendaraan extends CI_Model {
    
    public function simpan($data)
    {
        $this->db->insert('tbl_kendaraan',$data);
    }

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tbl_kendaraan');
        $this->db->order_by('id_kecamatan', 'desc');
        return $this->db->get()->result();;
        
        
    }

}

/* End of file ModelName.php */

