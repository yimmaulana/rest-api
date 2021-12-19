<?php

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Menu';
        $data['menu'] = $this->Menu_model->getAllMenu();
        if( $this->input->post('keyword') ) {
            $data['menu'] = $this->Menu_model->cariDataMenu();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Menu';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('menu/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Menu_model->tambahDataMenu();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('menu');
        }
    }

    public function hapus($id)
    {
        $this->Menu_model->hapusDataMenu($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('menu');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Menu';
        $data['menu'] = $this->Menu_model->getMenuById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('menu/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Menu';
        $data['menu'] = $this->Menu_model->getMenuById($id);
        $data['crust'] = ['Original Crust', 'Stuffed Crust', 'Sausage Crust', 'Double Cheesy Bites'];
        $data['ukuran'] = ['Regular', 'Jumbo'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('menu/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Menu_model->ubahDataMenu();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('menu');
        }
    }

}
