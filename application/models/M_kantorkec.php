<?php

class M_kantorkec extends CI_Model {

    public function simpan($data)
    {
        $this->db->insert('tbl_kantorkec',$data);
    }

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tbl_kantorkec');
        $this->db->order_by('id_kantor', 'desc');
        return $this->db->get()->result();;
        
    }

}

/* End of file ModelName.php */