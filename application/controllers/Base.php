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
		$this->login();
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
	public function client_types()
	{

		$client_types = $this->Data->getClientGroups();
		$result = array(
			'client_types' => $client_types
		);
		echo json_encode($result);
	}
	public function vat_types()
	{

		$vat_types = $this->Data->getVatTypes();
		$result = array(
			'vat_types' => $vat_types
		);
		echo json_encode($result);
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

	public  function login(){

		$this->load->view('login/login.php');

	}
	public function authentication(){
		/*1. Get Post Data*/
		$post_data = file_get_contents("php://input");
		$decoded_post_data = json_decode($post_data);
		$username = $this->input->post('username');
		$password =$this->input->post('password');
		$data = array();
		/*2. Login Validation */
		$status = $this->Data->login_validation($username, $password);
		if ($status == false) {
			/*3. Handle Invalid Login*/
			/*3.1 reload page showing error message*/
			$message = 'Log in failed!! Invalid Credentials';
			$status = false;
			$messageType = 2;
			/* 3.2. Audit Trail Log  */
			$action = 'Login Failed';
			$user = "Unknown";
			$this->createTrail($action, $user, $status);
		}else{
			/*3. Handle valid login */
			$userID = $status->user_id;
			$usergroup = $status->usergroup;
			$username = $status->username;
			/* 3.1. Set Session Data */
			$this->session->set_userdata('status', 'true');
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('userID', $userID);
			$this->session->set_userdata('usergroup', $usergroup);

			/* 3.2. Audit Trail Log  */
			$action = 'Login Successful';
			$this->createTrail($action, $userID, true);
			/* 3.3 Start session in dB*/
			$session_id= md5(uniqid(rand(), true));
			$this->session->set_userdata('session_id', $session_id);

			$session_data = array(
				'user_id' => $userID,
				'start_time' => date("Y-m-d H:i:s"),
				'session_id' => $session_id,
			);
			$this->Data->insert('active_sessions', $session_data);
			$message = 'Log in Successful';
			$status = true;
			$messageType = 1;
		}

		/*4. Send back Reponse*/
		$data = array(
			"status" => $status,
			"messageType" => $messageType,
			"message" => $message
		);
		echo json_encode($data);
	}
	public function unset_session()
	{
		$active_sessions = $this->Data->get_active_sessions();

		//end session in DB
		$session_id = $this->session->userdata("session_id");
		$data= array(
			'end_time' => date("Y-m-d H:i:s")
		);
		$unset = $this->Data->update('active_sessions', 'session_id', $session_id, $data);
		if($unset){
			$this->logout();
		}
	}
	public function logout(){
		//unset all user data & destroy session
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('status');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('userID');
		$this->session->unset_userdata('usergroup');
		$this->session->sess_destroy();
		//redirect to index page
		$this->login();
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
