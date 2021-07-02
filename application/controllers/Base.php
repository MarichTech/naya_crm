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
		$this->load->view('dashboard.php');

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

			$data = array(
				'ratecards' => $ratecards
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

}
