<?php



defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Base Controller for Naya Solutions Internal CRM Web Application
 * Module One: Quote Generator Module
 * @author  Mwaura Gitonga
 * @date 30.06.2021
 * @email gitongakmwaura@gmail.com
 * @signed U70xdn
 */

class Base extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
//		$this->isLoggedIn();
//		$this->isSuperAdmin();
//		$this->isAdmin();
		$this->load->model("Data_model", "Data");
		$this->load->model("Base_model");
	}

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
		$quotes = $this->Data->getQuotes();
		$data = array(
			'quotes' => $quotes
		);
		$this->load->view('dashboard.php', $data);
	}

	public function manage_clients()
	{
		$clients = $this->Data->getClients();
		$data = array(
			'clients' => $clients
		);
		$this->load->view('clients/manage_clients.php', $data);
	}

	public function job_categories()
	{
		$categories = $this->Data->getJobCategories();
		$data = array(
			'categories' => $categories
		);
		$this->load->view('jobs/job_categories.php', $data);
	}

	public function job_subcategories()
	{
		$subcategories = $this->Data->getJobSubCategories();
		$data = array(
			'subcategories' => $subcategories
		);
		$this->load->view('jobs/job_subcategories.php', $data);
	}

	public function materials()
	{
		$materials = $this->Data->getMaterials();
		$data = array(
			'materials' => $materials
		);
		$this->load->view('jobs/materials.php', $data);

	}
	public function rate_cards()
		{
			$ratecards = $this->Data->getRateCards();
			$providers= $this->Data->getClients(array('client_group' => 1));

			$data = array(
				'ratecards' => $ratecards,
				'providers' => $providers
			);
			$this->load->view('jobs/rate_cards.php', $data);

		}

	public function users()
	{
		$staff = $this->Data->getStaff();
		$data = array(
			'staffers' => $staff
		);
		$this->load->view('users/users.php', $data);

	}

	public function company_settings()
	{
		$companyDetails = $this->Data->getCompanyDetails();
		$data = array(
			'company' => $companyDetails
		);
		$this->load->view('settings/company_settings.php', $data);
	}


	public function logout()
	{
		//unset all user & session data and redirect to index page
		$this->session->unset_userdata('user_id');
		$this->session->sess_destroy();
		$this->load->view('login.php');
	}
	/*Audit Trail */
	/**
	 * @param $action
	 * @param $username
	 * @param $status
	 */

	function createTrail($action, $user_id ,$status)
	{
		$data = array(
			"action" =>$action,
			"ip_address" => $this->get_client_ip(),
			"status"=>$status,
			"user_id" =>$user_id,
			"time_of_action"=>date("Y-m-d H:i:s")
		);
		$this->Base_model->insertTrail($data);
	}
	/*Get Client IP For Audit Trail */

	/**
	 * @return mixed|string
	 */
	function get_client_ip() {
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}

}
