<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_payment_login extends CI_Model
{



    public function update($data, $id)
    {
        $this->db->where('ID', $id);
        return $this->db->update('payment_login', $data);
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
        $this->db->from('payment_login');

        $akun = $this->db->get();
        return $akun->result();
    }



    function tambah($data)
    {
        $this->db->insert('payment_login', $data);
        return TRUE;
    }


    function is_username_available($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get("payment_login");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function is_name_available($name)
    {
        $this->db->where('name', $name);
        $query = $this->db->get("companies");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
