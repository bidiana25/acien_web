<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_payment_login extends CI_Model
{



    public function update($data, $username)
    {
        $this->db->where('username', $username);
        return $this->db->update('payment_login', $data);
    }

    public function select_by_username($username)
    {
        $this->db->select('*');
        $this->db->from('payment_login');
        $this->db->where('username', $username);
        $akun = $this->db->get();
        return $akun->result();
    }

    


    public function select_for_client()
    {
        $this->db->select('*');
        $this->db->from('payment_login');
        $this->db->where('mark_for_delete', false);
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
