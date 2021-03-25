<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status_kasir extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('UserModel');
        $this->load->model('m_payment_login');
        $this->load->model('m_companies');
        $this->load->model('m_m_c_payment_method');
        $this->load->model('m_t_payment');
    }

    public function index()
    {
        //if ($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
            //redirect('c_dashboard'); // Redirect ke page home
        // function render_login tersebut dari file core/MY_Controller.php
        $ada_checkout = 0;
        $read_select = $this->m_t_payment->select_existing_payment($this->session->userdata('username'));
        foreach ($read_select as $key => $value) 
        {
            $ada_checkout = 1;
        }


        if($ada_checkout == 1)
        {
            $read_select = $this->m_payment_login->select_by_username($this->session->userdata('username'));
            foreach ($read_select as $key => $value) 
            {
              $company_id = $value->company_id;
            }

            $data = [
                "company_status" => $this->m_companies->select_by_id($company_id),
                "select_existing_payment" => $this->m_t_payment->select_existing_payment($this->session->userdata('username'))
            ];
            $this->render_backend('template/user/view_status_kasir_checkout', $data);
        }



        if($ada_checkout == 0)
        {
            $read_select = $this->m_payment_login->select_by_username($this->session->userdata('username'));
            foreach ($read_select as $key => $value) 
            {
              $company_id = $value->company_id;
            }

            $data = [
              "company_status" => $this->m_companies->select_by_id($company_id),
              "pilihan_payment" => $this->m_m_c_payment_method->select_for_client()
            ];
            $this->render_backend('template/user/view_status_kasir', $data);
        }

        



    }









    public function checkout()
    {
        if(isset($_POST['cancel']))
        {
            $read_select = $this->m_t_payment->select_existing_payment($this->session->userdata('username'));
            foreach ($read_select as $key => $value) 
            {                                        
                $id= $value->id;
            }

            $data = array(
                'updated_by' => 'acien app',
                'mark_for_delete' => TRUE
            );
            $this->m_t_payment->update($data, $id);
            
            
            redirect('Status_kasir');
        }
    }

    public function tambah()
    {
       
        
        $m_c_payment_method_id = intval($this->input->post('m_c_payment_method_id'));
        

        if($m_c_payment_method_id!=0)
        {

            $read_select = $this->m_m_c_payment_method->select_by_id($m_c_payment_method_id);
            foreach ($read_select as $key => $value) 
            {
                $total_day=$value->day;
                $payment_value=$value->value;
            }
            $data = array(
                    'username' => $this->session->userdata('username'),
                    'date' => date('Y-m-d'),
                    'time' => date('H:i:s'),
                    'total_day' => $total_day,
                    'payment_value' => $payment_value,
                    'payment_photo' => '',
                    'aproval' => false,
                    'created_by' => 'acien app',
                    'updated_by' => '',
                    'mark_for_delete' => false
            );

            $this->m_t_payment->tambah($data);


            redirect('Status_kasir');
        }
        else
        {
            redirect('Status_kasir');
        }
       
    }









}
