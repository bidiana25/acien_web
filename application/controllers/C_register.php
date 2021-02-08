<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_register extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('UserModel');
    }

    public function register()
    {
        if ($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
            redirect('c_dashboard'); // Redirect ke page home
        // function render_login tersebut dari file core/MY_Controller.php
        $this->render_register('template/register/register'); // Load view login.php
    }

    //functions  
    function check_username_avalibility()
    {
        if (!filter_var($_POST["username"])) {
            echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>Username Tidak Valid</span></label>';
        } else {
            $this->load->model("UserModel");
            if ($this->UserModel->is_username_available($_POST["username"])) {
                echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>Username Telah Terdaftar</label>';
            } else {
                echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span>Username Tersedia</label>';
            }
        }
    }

    //functions  
    function check_name_avalibility()
    {
        if (!filter_var($_POST["name"])) {
            echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>Nama Perusahaan Tidak Valid</span></label>';
        } else {
            $this->load->model("UserModel");
            if ($this->UserModel->is_name_available($_POST["name"])) {
                echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>Nama Perusahaan Telah Terdaftar</label>';
            } else {
                echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span>Nama Perusahaan Tersedia</label>';
            }
        }
    }
}
