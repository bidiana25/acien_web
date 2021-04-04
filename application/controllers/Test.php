<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Test extends CI_Controller
{
	//functions  
	function index()
	{
		$this->load->library('user_agent');

		if ($this->agent->is_browser())
		{
		        $agent = $this->agent->browser().' '.$this->agent->version();
		}
		elseif ($this->agent->is_robot())
		{
		        $agent = $this->agent->robot();
		}
		elseif ($this->agent->is_mobile())
		{
		        $agent = $this->agent->mobile();
		}
		else
		{
		        $agent = 'Unidentified User Agent';
		}

		echo $agent;

		echo $this->agent->platform(); // Platform info (Windows, Linux, Mac, etc.)
	}
	
}
