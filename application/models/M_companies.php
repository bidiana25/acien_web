<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_companies extends CI_Model
{



    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('companies', $data);
    }

    public function select_id($id)
    {
        $this->db->select('LEVEL_USER_ID');
        $this->db->from('T_M_D_LEVEL_USER');
        $this->db->where('LEVEL_USER', $id);
        $akun = $this->db->get();
        return $akun->result();
    }





    public function select()
    {
        $this->db->select('*');
        $this->db->from('companies');

        $akun = $this->db->get();
        return $akun->result();
    }



    function tambah($data)
    {
        $this->db->insert('companies', $data);
        return TRUE;
    }
}
