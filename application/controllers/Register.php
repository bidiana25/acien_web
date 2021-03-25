<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('UserModel');
        $this->load->model('m_payment_login');
        $this->load->model('m_companies');
    }

    public function index()
    {
        if ($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
            redirect('c_dashboard'); // Redirect ke page home
        // function render_login tersebut dari file core/MY_Controller.php
        $this->render_register('template/register/register'); // Load view login.php
    }






    public function tambah()
    {
       
        $username = $this->input->post('username');
        $password = ($this->input->post('password'));
        $confirm_password = ($this->input->post('confirm_password'));


        $email = $this->input->post('email');
        $phone_number = $this->input->post('phone');
        $company_postfix = $this->input->post('company_postfix');
        $tanggal_gajian = 1;

        if($password==$confirm_password)
        {
            $send_password = md5($password);
            $uniq_id = intval(strtotime(date('Y-m-d H:i:s')));
            $data = array(
                    'id' => $uniq_id,
                    'created_by' => 'acien app',
                    'created_date' => intval(strtotime(date('Y-m-d H:i:s'))),
                    'updated_by' => '',
                    'updated_date' => 0,
                    'version' => 0,
                    'address' => '',
                    'company_postfix' => '@' . $company_postfix,
                    'logo_path' => 0,
                    'maximum_user' => 5,
                    'name' => $company_postfix,
                    'phone_number' => $phone_number,
                    'pic' => $username,
                    'suspend' => false,
                    'expire_date' => date('Y-m-d'),
                    'wage_cutoff_date' => $tanggal_gajian
            );
            $this->m_companies->tambah($data);


            $data = array(
                    'username' => $username.'@'.$company_postfix,
                    'password' => $send_password,
                    'company_id' => $uniq_id,
                    'email' => $email,
                    'phone' => $phone_number,
                    'mark_for_delete' => false
            );

            $this->m_payment_login->tambah($data);


            $this->session->set_userdata('registered_username', $username.'@'.$company_postfix);
            
            $this->session->set_flashdata('notif', "<div class='alert alert-danger icons-alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><i class='icofont icofont-close-line-circled'></i></button><p>Registrasi Berhasil Untuk Username:".$username.'@'.$company_postfix."</p></div>");
            redirect('Login');
        }
        else
        {
            redirect('register/register');
        }
        
        
        


       
    }
}
