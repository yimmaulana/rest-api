<?php

use GuzzleHttp\Client;

class Menu_model extends CI_model 
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest-api/Projek_UASPRAK.SISTER/wpu-rest-server/api/',
            'auth' => ['yim', '17650043']
        ]);
    }

    public function getAllMenu()
    {
        // return $this->db->get('mahasiswa')->result_array(); 

        $response = $this->_client->request('GET', 'menu', [
            'query' => [
                'wpu-key' => 'rahasia'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function getMenuById($id)
    {

        $response = $this->_client->request('GET', 'menu', [
            'query' => [
                'wpu-key' => 'rahasia',
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function tambahDataMenu()
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

        $response = $this->_client->request('POST', 'menu', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function hapusDataMenu($id)
    {
        // $this->db->where('id', $id);
        // $this->db->delete('mahasiswa', ['id' => $id]);

        $response = $this->_client->request('DELETE', 'menu', [
            'form_params' => [
                'id' => $id,
                'wpu-key' => 'rahasia'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    

    public function ubahDataMenu()
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

        $response = $this->_client->request('PUT', 'menu', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function cariDataMenu()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        return $this->db->get('menu')->result_array();
    }
}