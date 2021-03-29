<?php
defined('BASEPATH') or exit('No direct script access allowed');

class A_c_dashboard extends MY_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_t_payment');
    $this->load->model('m_companies');
    $this->load->model('m_payment_login');
  }

  public function index()
  {
    $data = [
      "list_t_payment" => $this->m_t_payment->select($this->session->userdata('date_dashboard')),


      "title" => "Dashboard",
      "description" => "Web Version:21-01-26 22:11"
    ];

    $this->render_backend_admin('template/backend/pages/dashboard', $data);
  }


  public function date_dashboard()
  {
    $date_dashboard = ($this->input->post("date_dashboard"));
    $this->session->set_userdata('date_dashboard', $date_dashboard);
    redirect('/a_c_dashboard');
  }


  public function delete($id)
  {
    $data = array(
      'updated_by' => 'acien app', //username yg login
      'mark_for_delete' => TRUE
    );
    $this->m_t_payment->update($data, $id);
    redirect('/a_c_dashboard');
  }

  public function done_payment($id)
  {
    $today = date('Y-m-d');
    $read_select = $this->m_t_payment->select_by_id($id);
    foreach ($read_select as $key => $value) 
    {
      $username = $value->username;
      $total_day = $value->total_day;
    }


    $read_select = $this->m_payment_login->select_by_username($username);
    foreach ($read_select as $key => $value) 
    {
      $company_id = $value->company_id;
    }

    $read_select = $this->m_companies->select_by_id($company_id);
    foreach ($read_select as $key => $value) 
    {
      $expire_date = $value->expire_date;
    }

    if($expire_date<$today)
    {
      $total_day_text ="+".$total_day." day";
      $new_expire_date = date('Y-m-d',(strtotime ( $total_day_text , strtotime ( $today) ) ));
    }

    if($expire_date>=$today)
    {
      $total_day_text ="+".$total_day." day";
      $new_expire_date = date('Y-m-d',(strtotime ( $total_day_text , strtotime ( $expire_date) ) ));
    }

    $data = array(
      'updated_by' => 'acien app', //username yg login
      'expire_date' => $new_expire_date
    );
    $this->m_companies->update($data, $company_id);


    $data = array(
      'updated_by' => 'acien app', //username yg login
      'aproval' => TRUE
    );
    $this->m_t_payment->update($data, $id);


    redirect('/a_c_dashboard');
  }




}
