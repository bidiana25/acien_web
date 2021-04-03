<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('UserModel');
    }

    public function index()
    {
        if ($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
            redirect('dashboard'); // Redirect ke page home


        $data = [
            "anjing" => 'Login'
        ];
        // function render_login tersebut dari file core/MY_Controller.php
        $this->render_login('template/login/index', $data); // Load view login.php
    }

    public function login()
    {
        $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
        $password = md5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5

        $user = $this->UserModel->get($username); // Panggil fungsi get yang ada di UserModel.php

        if (empty($user)) { // Jika hasilnya kosong / user tidak ditemukan
            $this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata
            redirect('Login'); // Redirect ke halaman login
        } else {
            if ($password == $user->password) { // Jika password yang diinput sama dengan password yang didatabase

                if ($user->level_user_id == 1) {
                    $session = array(
                        'authenticated' => true, // Buat session authenticated dengan value true
                        'username' => $user->username,  // Buat session username
                        'nama' => $user->nama, // Buat session nama
                        'id' => $user->id, // Buat session nama
                        'email' => $user->email, // Buat session nama
                        'password' => $user->password, // Buat session nama
                        'photo' => $user->photo, // Buat session nama
                        'role' => $user->role // Buat session role
                    );

                    $this->session->set_userdata($session); // Buat session sesuai $session
                    redirect('status_kasir'); // Redirect ke halaman home
                }


                if ($user->level_user_id == 0) {
                    $session = array(
                        'authenticated' => true, // Buat session authenticated dengan value true
                        'password' => $user->password,
                        'username' => $user->username,
                        'date_dashboard' => date('Y-m-d')
                    );

                    $this->session->set_userdata($session); // Buat session sesuai $session
                    redirect('a_c_dashboard'); // Redirect ke halaman home
                }
            } else {
                $this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
                redirect('Login'); // Redirect ke halaman login
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy(); // Hapus semua session
        redirect('login'); // Redirect ke halaman login
    }


    public function save_password()
    {
        $this->form_validation->set_rules('new', 'New', 'required|alpha_numeric');
        $this->form_validation->set_rules('re_new', 'Retype New', 'required|matches[new]');
        $id = $this->session->userdata('id');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('notif', '<div class="alert alert-danger icons-alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="icofont icofont-close-line-circled"></i></button><p>Password Baru dan Konfirmasi Password harus sama!</p></div>');
            redirect('login/profile');
        } else {
            $cek_old = $this->UserModel->cek_old();
            if ($cek_old == False) {
                $this->session->set_flashdata('notif', '<div class="alert alert-danger icons-alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="icofont icofont-close-line-circled"></i></button><p> Password lama tidak sama!</p></div>');
                redirect('Login/profile');
            } else {
                $data = ['password' => $this->input->post('new')];
                $this->UserModel->save($data, $id);
                $this->session->sess_destroy();
                $this->session->set_flashdata('message', 'Password berhasil diubah, silahkan login kembali!');
                redirect('login');
            } //end if valid_user
        }
    }
}
