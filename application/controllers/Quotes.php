<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Quotes Controller for Naya Solutions Internal CRM Web Application
 * Module One: Quote Generator Module
 * @author  Mwaura Gitonga
 * @date 02.07.2021
 * @email gitongakmwaura@gmail.com
 * @signed U70xdn
 */
class Quotes extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model("Data_model", "Data");

	}

	public function getClients()
	{

		$clients = $this->Data->getClients();
		$result = array(
			'clients' => $clients
		);
		echo json_encode($result);
	}

	public function jobTypes()
	{

		$jobTypes = $this->Data->getJobCategories();
		$result = array(
			'jobTypes' => $jobTypes
		);
		echo json_encode($result);
	}

	public function jobSubTypes()
	{

		$jobSubTypes = $this->Data->getJobSubCategories();
		$result = array(
			'jobSubTypes' => $jobSubTypes
		);
		echo json_encode($result);
	}
	public function material()
	{

		$materials = $this->Data->getMaterials();
		$result = array(
			'materials' => $materials
		);
		echo json_encode($result);
	}


		public function ratecard()
	{
		$input = file_get_contents("php://input");
		$decoded = json_decode($input);
		$sub_cat_id = $decoded->sub_cat_id;
		$params = array(
			'rate_cards.sub_cat_id' => $sub_cat_id
		);
		$ratecard = $this->Data->getRateCard($params);
		$result = array(
			'ratecard' => $ratecard
		);
		echo json_encode($result);
	}


	public function clientDetails()
	{
		$input = file_get_contents("php://input");
		$decoded = json_decode($input);
		$client_id = $decoded->client_id;
		$params = array(
			'clients.client_id' =>$client_id
		);
		$client = $this->Data->getClients($params);

		$result = array(
			'client' => $client
		);
		echo json_encode($result);
	}

}
