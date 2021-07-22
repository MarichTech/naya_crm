<?php
use Mpdf\Mpdf;
use Mpdf\MpdfException;
include "Base.php";
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Quotes Controller for Naya Solutions Internal CRM Web Application
 * Module One: Quote Generator Module
 * @author  Mwaura Gitonga
 * @date 02.07.2021
 * @email gitongakmwaura@gmail.com
 * @signed U70xdn
 */


class Quotes extends  Base
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Data_model", "Data");
	}

	public function getQuoteTypes()
	{

		$quote_types = $this->Data->quoteTypes();
		$result = array(
			'quote_types' => $quote_types
		);
		echo json_encode($result);
	}
	public function getClients()
	{

		$clients = $this->Data->getClients();
		$result = array(
			'clients' => $clients
		);
		echo json_encode($result);
	}

	public function references()
	{
		$quote_ref = '';
		if ($quote_ref == '') {
			$quote_ref = "QT". rand(1000, 9999);
		} else {
			$quote_ref = "QT001";
		}
		$date = date("d-m-Y");
		$result = array(
			"quote_ref" => $quote_ref,
			"date" => $date
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

public function currencies()
	{
		$currencies = $this->Data->getCurrencies();
		$result = array(
			'currencies' => $currencies
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
	public function  quote(){
		/*  1. Get input fields  */
		$input = file_get_contents("php://input");
		$decoded = json_decode($input);
		$title   = $decoded->title;
		$support_charge   = $decoded->support_charge;
		$support_duration   = $decoded->support_duration;
		$support_items   = $decoded->support_items;
		$support_doc   = $_FILES['support_doc'];

		var_dump($support_charge);
		var_dump($support_duration);
		var_dump($support_items);
		var_dump($support_doc);
		$references   = $decoded->quote_references;
		$quote_ref = $references->quote_ref;
		$date = $references->date;
		$clientDetails  = $decoded->clientDetails;
		$client_id = $clientDetails->client_id;
		$client_name = $clientDetails->name;
		$job_type_id  = $decoded->job_type_id;
		$jobTypeName  = $decoded->jobTypeName;
		$job_sub_type_id  = $decoded->job_sub_type_id;
		$job_sub_type_name  = $decoded->job_sub_type_name;
		$rate_card  = $decoded->rate_card;
		$materials_to_show  = $decoded->materials_to_show;
		$quote_type = $decoded->quote_type;
		$quote_type_id = $decoded->quote_type_id;
		$currencies = $decoded->currencies;
		$currencies_to_show = $decoded->currencies_to_show;
		$markup = $decoded->markup;
		$line_items = $decoded->line_items;
		$vat_include = $decoded->vat_include;
		$uid = $decoded->uid;
		$vat = $decoded->vat;
		$materials  = $decoded->materials;
		$notes  = $decoded->notes;
		$payment_terms  = $decoded->payment_terms;
		/* 2. Insert to dB tables  */
		/*	-  Quotes table -  */
		$quotesTableData = array(
			'quote_ref' => $quote_ref,
			'title' => $title,
			'quote_type' => $quote_type_id,
			'job_category' => $job_type_id,
			'job_sub_category' => $job_sub_type_id,
//			'rate_card_id' => implode(",", $rate_card),
			'additional_materials' => implode(",", $materials_to_show),
			'notes' => $notes,
			'payment_terms' => $payment_terms,
			'amount' => 0 ,
			'client_id' => $client_id,
			'user_id' => 1,
			'date_created' => date("Y-m-d H:i:s"),
			'last_modified' => date("Y-m-d H:i:s"),
		);
		/*	- Quote status  table - */
		$qt_status_table_data = array(
			'quote_ref' => $quote_ref,
			'status_id' => 1,
			'date_created' => date("Y-m-d H:i:s"),
			'last_modified' => date("Y-m-d H:i:s"),
			);
		/*	-Quotes references  table - */
		$qt_refs_table_data = array(
			'index_id' => '',
			'quote_ref' => $quote_ref,
			'date_created' => date("Y-m-d H:i:s"),
			'last_modified' => date("Y-m-d H:i:s"),
		);

		//check if quote exists in dB table
		$quoteExists = $this->Data->dataExists('quotes','quote_ref', $quote_ref);
		if($quoteExists == false){
			$qt_table_insert = $this->Data->insert('quotes', $quotesTableData);
			$qt_status_table_insert = $this->Data->insert('quote_status', $qt_status_table_data);
			$qt_refs_table_insert = $this->Data->insert('quote_references', $qt_refs_table_data);
			/*	- Audit Trail  table - */
			$user_id = 1;
			if(!$qt_table_insert){
				$this->createTrail('Create Quote', $user_id, "Fail");
			}else if(!$qt_refs_table_insert){
				$this->createTrail('Create Quote', $user_id, "Fail");
			}else if(!$qt_status_table_insert){
				$this->createTrail('Create Quote', $user_id, "Fail");
			}else{
				$this->createTrail('Create Quote', $user_id, "Success");
			}
			//var_dump($materials);
			$user =$this->Data->getUsers(array('user_id'=> $user_id));
			/* 3. Prepare Data for PDF  */
			$PDFData = array(
				'quote_ref' => $quote_ref,
				'title' => $title,
				'support_doc' => $support_doc,
				'support_items' => $support_items,
				'support_duration' => $support_duration,
				'support_charge' => $support_charge,
				'quote_type' => $quote_type,
				'quote_type_id' => $quote_type_id,
				'currencies' => $currencies,
				'currencies_to_show' => $currencies_to_show,
				'markup' => $markup,
				'line_items' => $line_items,
				'vat_include' => $vat_include,
				'vat' => $vat,
				'uid' => $uid,
				'job_category' => $job_type_id,
				'job_type_name' => $jobTypeName,
				'job_sub_category' => $job_sub_type_id,
				'job_sub_type_name' => $job_sub_type_name,
				'rate_card' => $rate_card,
				'materials' => $materials,
				'materials_to_show' => $materials_to_show,
				'notes' => $notes,
				'payment_terms' => $payment_terms,
				'amount' => 0 ,
				'client_details' => $clientDetails,
				'client_id' => $client_id,
				'client_name' => $client_name,
				'user_id' => $user_id,
				'username' => $user[0]->username,
				'date_created' =>$date,
			);
			//var_dump($PDFData);
			/*4.Generate & Store PDF */
			try {
				$this->generatePdf($PDFData);
			} catch (MpdfException $e) {
				echo $e->getMessage();
			}
		}else{
			return false;
		}

	}

	private function generatePdf(array $PDFData)
	{
		$mpdf = new Mpdf(array('tempDir' => APPPATH . '/views/quotes/temp'));
		$mpdf->debug = false;
		$mpdf->shrink_tables_to_fit = 0;
		$mpdf->keep_table_proportions = true;
		$data = array(
			'data' => $PDFData
		);
		$html = '';
		if($PDFData['quote_type_id'] == 1){
			$html = $this->load->view('quotes/template', $data);// pass the data array as the parameter
		}elseif ($PDFData['quote_type_id'] == 2){
			$html = $this->load->view('quotes/hware_sware_template', $data);// pass the data array as the parameter

		}elseif ($PDFData['quote_type_id'] == 3){
			$html = $this->load->view('quotes/support_template', $data);// pass the data array as the parameter

		}
		$string_version = serialize($html);
		$mpdf->charset_in = 'utf-8';
		$mpdf->WriteHTML($string_version);
		ob_clean();
		error_reporting(0);
		if ($PDFData) {
			ini_set("pcre.backtrack_limit", "10000000");
			//header('Content-Type: application/pdf');
			$mpdf->Output(FCPATH . '/assets/quotes/' . $PDFData["quote_ref"] . '.pdf', 'F');
		}
		ob_end_clean();
		}

	public function getPdfUrl()
	{
		$data = $this->Data->getLastReference();
		$quote_ref = $data->quote_ref;
		$fileUrl = base_url() . 'assets/quotes/' . $quote_ref . '.pdf';
		$data = array(
			'url' => $fileUrl
		);
		echo json_encode($data);
	}
	public function view_quote()
	{
		$quote_id = $this->uri->segment(2);
		$params = array(
			'quote_id' => $quote_id
		);
		$quoteDetails = $this->Data->getQuotes($params);
		$data = array(
			'quoteDetails' => $quoteDetails
		);
		$this->load->view('quotes/view_quote', $data);
	}

}
