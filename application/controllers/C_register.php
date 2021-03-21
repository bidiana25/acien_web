<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_register extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('UserModel');
        $this->load->model('m_payment_login');
        $this->load->model('m_companies');
    }

    public function register()
    {
        if ($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
            redirect('c_dashboard'); // Redirect ke page home
        // function render_login tersebut dari file core/MY_Controller.php
        $this->render_register('template/register/register_new'); // Load view login.php
    }

    //functions  
    function check_username_avalibility()
    {
        if (!filter_var($_POST["username"])) {
            echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>Username Tidak Valid</span></label>';
        } else {
            $this->load->model("m_payment_login");
            if ($this->m_payment_login->is_username_available($_POST["username"])) {
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
            $this->load->model("m_payment_login");
            if ($this->m_payment_login->is_name_available($_POST["name"])) {
                echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>Nama Perusahaan Telah Terdaftar</label>';
            } else {
                echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span>Nama Perusahaan Tersedia</label>';
            }
        }
    }

    public function proses()
    {
        // $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[1]|max_length[255]|is_unique[tb_user.username]');
        // $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]'); \
        $this->form_validation->set_rules('password', 'password', 'required|alpha_numeric');
        $this->form_validation->set_rules('comfirm-password', 'Retype New', 'required|matches[password]');

        if ($this->form_validation->run() == true) {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $email = $this->input->post('email');
            $phone_number = $this->input->post('phone');
            $company_name = $this->input->post('name');
            $tanggal_gajian = 1;

            $uniq_id = intval(strtotime(date('Y-m-d H:i:s')));
            $data = array(
                'id' => $uniq_id,
                'created_by' => 'acien app',
                'created_date' => intval(strtotime(date('Y-m-d H:i:s'))),
                'updated_by' => '',
                'updated_date' => 0,
                'version' => 0,
                'address' => '',
                'company_postfix' => '@' . $company_name,
                'logo_path' => 0,
                'maximum_user' => 5,
                'name' => $company_name,
                'phone_number' => $phone_number,
                'pic' => $username,
                'suspend' => false,
                'expire_date' => date('Y-m-d'),
                'wage_cutoff_date' => $tanggal_gajian
            );
            $this->m_companies->tambah($data);



            $data = array(
                'username' => $username,
                'password' => $password,
                'company_id' => $uniq_id,
                'email' => $email,
                'phone' => $phone_number,
                'mark_for_delete' => false
            );

            $this->m_payment_login->tambah($data);
            redirect('Login');
        }


        /*if ($this->form_validation->run() == true) {

            $data1 = array(
                $username = $this->input->post('username'),
                $password = md5($this->input->post('password')),
                $email = $this->input->post('email'),
                $phone = $this->input->post('phone'),
                $company_id = $this->input->post('id')
            );
            $data2 = array(
                $id = '5',
                $name = $this->input->post('name')
            );

            $this->UserModel->register($data1, $data2);
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
            redirect('Auth');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('C_register/register');
        }
        */
    }
}
