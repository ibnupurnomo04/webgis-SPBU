<?php

class M_spbu extends CI_Model {

    public function simpan($data)
    {
        $this->db->insert('tbl_spbu',$data);
    }

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tbl_spbu');
        $this->db->order_by('id_spbu','desc');
        return $this->db->get()->result();
    }   

    public function detail($id_spbu)
    {
        $this->db->select('*');
        $this->db->from('tbl_spbu');
        $this->db->where('id_spbu', $id_spbu);
        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_spbu', $data['id_spbu']);
        $this->db->update('tbl_spbu', $data);
        
        
    }

    public function delete($data)
    {
        $this->db->where('id_spbu', $data['id_spbu']);
        $this->db->delete('tbl_spbu', $data); 
    }

}

/* End of file ModelName.php */
