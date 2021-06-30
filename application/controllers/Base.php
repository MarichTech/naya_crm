<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller
{


	/**
	 * Base Controller for Naya Solutions Internal CRM Web Application
	 * Module One: Quote Generator Module
	 * @author  Mwaura Gitonga
	 * @date 30.06.2021
	 * @email gitongakmwaura@gmail.com
	 * @signed U70xdn
	 */
	public function index()
	{
		$this->load->view('dashboard.php');

	}
	public function new_quote()
	{
		$this->load->view('quotes/generateQuote.php');

	}
	public function home()
	{
		$this->load->view('dashboard.php');

	}
	public function logout()
	{
		//unset all user & session data and redirect to index page
		$this->session->unset_userdata('user_id');
		$this->session->sess_destroy();
		$this->load->view('login.php');
	}

}
