<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_t_web_visit extends CI_Model
{
    function tambah($data)
    {
        $this->db->insert('t_web_visit', $data);
        return TRUE;
    }
}
