<?php

class Dominos_model extends CI_Model 
{
    public function getDominos ($id = null)
    {
        if ($id === null) {
            return $this->db->get('dominos')->result_array();
        }else {
            return $this->db->get_where('dominos', ['id' => $id])->result_array();
        }
    }

    public function deleteDominos($id)
    {
        $this->db->delete('dominos', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function createDominos($data)
    {
        $this->db->insert('dominos', $data);
        return $this->db->affected_rows();
    }

    public function updateDominos($data, $id)
    {
        $this->db->update('dominos',$data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}