<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model
{

    public function get($username)
    {
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('payment_login')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('payment_login', $data);
    }

    public function save($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('payment_login', $data);
    }


    public function cek_old()
    {
        $old = $this->input->post('old');
        $this->db->where('password', $old);
        $query = $this->db->get('payment_login');
        return $query->result();
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

    function register($data1, $data2)
    {
        $this->db->trans_start();

        $this->db->insert('companies', $data2);
        $id = $this->db->insert_id();

        $data1['company_id'] = $id;
        $this->db->insert('payment_login', $data1);

        $this->db->trans_complete();

        return $this->db->insert_id();
    }



    function tambah($data)
    {
        $this->db->insert('payment_login', $data);
        return TRUE;
    }
}
