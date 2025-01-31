<?php



class M_signup extends CI_Model {

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->order_by('id_user','desc');
        return $this->db->get()->result();
    }   

    public function simpan($data)
    {
        $this->db->insert('tbl_user', $data);
    }

    public function detail($id_user)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('id_user', $id_user);
        return $this->db->get()->row();
    }

}

/* End of file ModelName.php */
