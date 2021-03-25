<?php
defined('BASEPATH') or exit('No direct script access allowed');

class A_check_existing_username extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_payment_login');
    }

    public function index()
    {
        $username = ($this->input->post("id"));
        $read_select = $this->m_payment_login->select_by_username($username);
        foreach ($read_select as $key => $value) 
        {
          echo "1"; 
        }
    }

    
}
