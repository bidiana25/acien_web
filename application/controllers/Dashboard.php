<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_payment_login');
    }


    public function index()
    {
    	$data = [
                "jumlah_client" =>  $this->m_payment_login->select_count_id(),
                "jumlah_users" => $this->m_payment_login->select_count_users_id()
                
            ];
        $this->session->set_userdata('registered_username', '');
        $this->render_backend('template/user/index',$data);


    }
}
