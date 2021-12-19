<?php

class Dominos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dominos_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Menu';
        $data['dominos'] = $this->Dominos_model->getAllDominos();
        if( $this->input->post('keyword') ) {
            $data['dominos'] = $this->Dominos_model->cariDataDominos();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('dominos/index', $data);
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
            $this->load->view('dominos/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Dominos_model->tambahDataDominos();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('dominos');
        }
    }

    public function hapus($id)
    {
        $this->Dominos_model->hapusDataDominos($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('dominos');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Menu';
        $data['dominos'] = $this->Dominos_model->getDominosById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('dominos/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Menu';
        $data['dominos'] = $this->Dominos_model->getDominosById($id);
        $data['crust'] = ['Original Crust', 'Stuffed Crust', 'Sausage Crust', 'Double Cheesy Bites'];
        $data['ukuran'] = ['Regular', 'Jumbo'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('dominos/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dominos_model->ubahDataDominos();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('dominos');
        }
    }

}
