<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Test extends CI_Controller
{
	//functions  
	function index()
	{
		$ip = $this->input->ip_address();
		echo $ip;
	}
	
}
