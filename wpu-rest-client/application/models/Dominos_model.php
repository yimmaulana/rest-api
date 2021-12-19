<?php

use GuzzleHttp\Client;

class Dominos_model extends CI_model 
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest-api/Projek_UASPRAK.SISTER/wpu-rest-server-dominos/api/',
            'auth' => ['yim', '17650043']
        ]);
    }

    public function getAllDominos()
    {
        // return $this->db->get('mahasiswa')->result_array(); 

        $response = $this->_client->request('GET', 'dominos', [
            'query' => [
                'wpu-key' => 'rahasia'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function getDominosById($id)
    {

        $response = $this->_client->request('GET', 'dominos', [
            'query' => [
                'wpu-key' => 'rahasia',
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function tambahDataDominos()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "gambar" => $this->input->post('gambar', true),
            "keterangan" => $this->input->post('keterangan', true),
            "crust" => $this->input->post('crust', true),
            "ukuran" => $this->input->post('ukuran', true),
            "harga" => $this->input->post('harga', true),
            'wpu-key' => 'rahasia'
        ];

        $response = $this->_client->request('POST', 'dominos', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function hapusDataDominos($id)
    {
        // $this->db->where('id', $id);
        // $this->db->delete('mahasiswa', ['id' => $id]);

        $response = $this->_client->request('DELETE', 'dominos', [
            'form_params' => [
                'id' => $id,
                'wpu-key' => 'rahasia'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    

    public function ubahDataDominos()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "gambar" => $this->input->post('gambar', true),
            "keterangan" => $this->input->post('keterangan', true),
            "crust" => $this->input->post('crust', true),
            "ukuran" => $this->input->post('ukuran', true),
            "harga" => $this->input->post('harga', true),
            "id" => $this->input->post('id', true),
            'wpu-key' => 'rahasia'
        ];

        $response = $this->_client->request('PUT', 'dominos', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function cariDataDominos()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        return $this->db->get('dominos')->result_array();
    }
}