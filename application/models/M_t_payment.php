<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_t_payment extends CI_Model
{


    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('t_payment', $data);
    }

    


    public function select_existing_payment($username)
    {
        $this->db->limit(1);
        $this->db->select('*');
        $this->db->from('t_payment');
        $this->db->where('username', $username);
        $this->db->where('mark_for_delete', false);
        $this->db->where('aproval', false);
        $this->db->order_by("id", "desc");
        $akun = $this->db->get();
        return $akun->result();
    }

    
    public function select_by_id($m_c_payment_method_id)
    {
        $this->db->select('*');
        $this->db->from('t_payment');
        $this->db->where('id', $m_c_payment_method_id);
        $akun = $this->db->get();
        return $akun->result();
    }

    public function select_for_client()
    {
        $this->db->select('*');
        $this->db->from('t_payment');
        $this->db->where('mark_for_delete', false);
        $akun = $this->db->get();
        return $akun->result();
    }



    function tambah($data)
    {
        $this->db->insert('t_payment', $data);
        return TRUE;
    }



}
