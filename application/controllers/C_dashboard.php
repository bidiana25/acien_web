<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
    	$this->session->set_userdata('registered_username', '');
        $this->render_backend('template/user/index');
    }
}
