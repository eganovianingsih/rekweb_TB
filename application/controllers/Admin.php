<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller {
        
    
    public function __construct() {
        parent::__construct();
        is_logged();

        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['barang'] = $this->Admin_model->getAllBarang();
        $data['title'] = "Dashboard";
        $data['user'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/ecommerce_footer');
    }

    public function tambah(){
        $data['title'] = 'Form Tambah Data Barang';
        $this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('admin/tambah', $data);
            $this->load->view('templates/ecommerce_footer');
        }else {
            $this->Admin_model->tambahBarang();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin');
        }
    }

     public function edit($id)
        {
            $data['title'] = 'Form Edit Data Barang';
            $data['barang'] = $this->Admin_model->getBarangById($id);
            $data['jenis_barang'] = ['1','2'];
            $this->form_validation->set_rules('nama_barang','Nama_Barang', 'required');
            $this->form_validation->set_rules('harga_barang','Harga_Barang', 'required|numeric');
            $this->form_validation->set_rules('stok_barang','Stok_Barang', 'required|numeric');
             $this->form_validation->set_rules('deskripsi_barang','Deskripsi_Barang', 'required');

            if( $this->form_validation->run()== FALSE){
            $this->load->view('templates/admin_header',$data);
            $this->load->view('admin/edit',$data);
            $this->load->view('templates/ecommerce_footer');

        } else {
            $this->Admin_model->editDataBarang();
            $this->session->set_flashdata('flash', 'DiUbah');
            redirect('admin');
        }

        }

        public function hapus($id)
        {
            $this->Admin_model->hapusDataBarang($id);
            $this->session->set_flashdata('flash','dihapus');
            redirect('admin');
        }

}