<?php


class Spbu extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('m_spbu');
}

    public function index()
    {
        $data = array(
            'title' =>'Data SPBU',
            'spbu'  => $this->m_spbu->tampil(),
            'isi'   =>'v_dataspbu'

    
    );
    $this->load->view('layout/v_wrapper',$data, FALSE);
    }

    /* CRUD */

    /* --------------------------INPUT---------------------*/
    public function input()
    {
        $this->user_login->cek_login();  //batasan hak akses

        $this->form_validation->set_rules('nama_spbu', 'Nama Spbu', 'required', array (
            'required' => '%s mohon diisi !!!'
        ));  
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array (
            'required' => '%s mohon diisi !!!'
        ));  
        $this->form_validation->set_rules('penyedia', 'penyedia', 'required', array (
            'required' => '%s mohon dipilih !!!'
        )); 
        $this->form_validation->set_rules('latitude', 'latitude', 'required', array (
            'required' => '%s mohon diisi !!!'
        ));     
        $this->form_validation->set_rules('longitude', 'longitude', 'required', array (
            'required' => '%s mohon diisi !!!'
        ));

        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required', array (
            'required' => '%s mohon diisi !!!'
        )); 
        
        $this->form_validation->set_rules('wilayah', 'Wilayah', 'required', array (
            'required' => '%s mohon dipilih !!!'
        ));
        

    if ($this->form_validation->run() ==FALSE) {
        $data = array(
        'title' =>'Input Data SPBU',
        'isi'   =>'v_input_spbu'
    
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
        }else {
            $data = array
            (
                'nama_spbu'=>$this->input->post('nama_spbu'),
                'alamat'=>$this->input->post('alamat'),
                'penyedia'=>$this->input->post('penyedia'),
                'latitude'=>$this->input->post('latitude'),
                'longitude'=>$this->input->post('longitude'),
                'kecamatan'=>$this->input->post('kecamatan'),
                'wilayah'=>$this->input->post('wilayah'),
                'keterangan'=>$this->input->post('keterangan')
            
            );
        $this->m_spbu->simpan($data);
        $this->session->set_flashdata('pesan','data berhasil disimpan');
        redirect('spbu/input');
        
        }


        $data = array(
            'title' =>'Input Data SPBU',
            'isi'   =>'v_input_spbu'

    
    );
    $this->load->view('layout/v_wrapper',$data, FALSE);
    }

    /* --------------------------EDIT---------------------*/
    public function edit($id_spbu)
    {
        $this->user_login->cek_login();  //batasan hak akses

        $this->form_validation->set_rules('nama_spbu', 'Nama Spbu', 'required', array (
            'required' => '%s mohon diisi !!!'
        ));  
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array (
            'required' => '%s mohon diisi !!!'
        ));  
        $this->form_validation->set_rules('penyedia', 'penyedia', 'required', array (
            'required' => '%s mohon dipilih !!!'
        )); 
        $this->form_validation->set_rules('latitude', 'latitude', 'required', array (
            'required' => '%s mohon diisi !!!'
        ));     
        $this->form_validation->set_rules('longitude', 'longitude', 'required', array (
            'required' => '%s mohon diisi !!!'
        ));

        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required', array (
            'required' => '%s mohon diisi !!!'
        )); 
        
        $this->form_validation->set_rules('wilayah', 'Wilayah', 'required', array (
            'required' => '%s mohon dipilih !!!'
        ));

        if ($this->form_validation->run() ==FALSE) {
            $data = array(
            'title' =>'Edit Data SPBU',
            'spbu'  => $this->m_spbu->detail($id_spbu),
            'isi'   =>'v_edit_spbu'
        
            );
            $this->load->view('layout/v_wrapper',$data, FALSE);
            }else {
                $data = array
                (
                    'id_spbu'   => $id_spbu,
                    'nama_spbu' =>$this->input->post('nama_spbu'),
                    'alamat'    =>$this->input->post('alamat'),
                    'penyedia'  =>$this->input->post('penyedia'),
                    'latitude'  =>$this->input->post('latitude'),
                    'longitude' =>$this->input->post('longitude'),
                    'kecamatan'=>$this->input->post('kecamatan'),
                    'wilayah'   =>$this->input->post('wilayah'),
                    'keterangan'=>$this->input->post('keterangan')
                
                );
            $this->m_spbu->edit($data);
            $this->session->set_flashdata('pesan','data berhasil diperbaharui');
            redirect('spbu');
            
            }
    }
    /* --------------------------DELETE---------------------*/
    public function delete($id_spbu)
    {
        $this->user_login->cek_login();  //batasan hak akses
        
        $data = array('id_spbu' =>$id_spbu);
        $this->m_spbu->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('spbu');
    }
}

/* End of file Controllername.php */
