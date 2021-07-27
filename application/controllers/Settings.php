<?php
include "Base.php";
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Settings Controller for Naya Solutions Internal CRM Web Application
 * Module Two : Settings Module
 * @author  Mwaura Gitonga
 * @date 25.07.2021
 * @email gitongakmwaura@gmail.com
 * @signed U70xdn
 */


class Settings extends  Base
{
 public function update(){
	 $data = array();
	 $option = $this->uri->segment(2);
	 $username = "mwaura";
//	 $username = $this->session->userdata('username');
	 	if($option == "client"){
			/*  1. Get input fields  */
			$client_id = $this->input->post('client_id');
			$name = $this->input->post('name');
			$email =$this->input->post('email');
			$mobile = $this->input->post('mobile');
			$address = $this->input->post('address');
			$rep_name = $this->input->post('rep_name') ;
			$rep_mobile = $this->input->post('rep_mobile');
			$rep_email  =  $this->input->post('rep_email');
			$payment_terms = $this->input->post('payment_terms');
			$vat_type = $this->input->post('vat_type');
			$client_group =  $this->input->post('client_group');
			/*  2. Prepare dB row update data  */
			$insert_data = array(
				'name'=> $name,
				'email'=> $email,
				'mobile'=> $mobile,
				'address'=> $address,
				'rep_name'=> $rep_name,
				'rep_mobile'=> $rep_mobile,
				'rep_email'=> $rep_email,
				'payment_terms'=> $payment_terms,
				'vat_type'=> $vat_type,
				'client_group'=> $client_group,
				'last_modified'=> date("Y-m-d H:i:s"),
			);
			/*update dB data*/
			$status = $this->Data->update("clients", 'client_id', $client_id, $insert_data);
			if ($status == true) {
				/*insert audit trail log*/
				$action = 'Client Details Updated';
				$this->createTrail($action, $username, $status);
				/*insert audit trail log*/
				$messageType = 1;
				$message = "Client Details Updated Successfully";
			} else {
				/*insert audit trail log*/
				$action = 'Failed Client Details Update Attempt';
				$this->createTrail($action, $username, $status);
				/*insert audit trail log*/
				$messageType = 2;
				$message = "Client Details Not Updated";
			}
			

		}else if($option == "material"){
			/*  1. Get input fields  */
			$material_id = $this->input->post('material_id');
			$description = $this->input->post('description');
			$unit_of_measurement = $this->input->post('UOM');
			$quantity = $this->input->post('quantity');
			$proposed_rate = $this->input->post('proposed_rate');
			$remarks = $this->input->post('remarks') ;
			
			/*  2. Prepare dB row update data  */
			$insert_data = array(
				'description'=> $description,
				'unit_of_measurement'=> $unit_of_measurement,
				'quantity'=> $quantity,
				'proposed_rate'=> $proposed_rate,
				'remarks'=> $remarks,
				'last_modified'=> date("Y-m-d H:i:s"),
			);
			/*update dB data*/
			$status = $this->Data->update("clients", 'client_id', $client_id, $insert_data);
			if ($status == true) {
				/*insert audit trail log*/
				$action = 'Client Details Updated';
				$this->createTrail($action, $username, $status);
				/*insert audit trail log*/
				$messageType = 1;
				$message = "Client Details Updated Successfully";
			} else {
				/*insert audit trail log*/
				$action = 'Failed Client Details Update Attempt';
				$this->createTrail($action, $username, $status);
				/*insert audit trail log*/
				$messageType = 2;
				$message = "Client Details Not Updated";
			}
			

		
		}else if($option =="user"){

		}
		$data = array(
				'status' => $status,
				'messageType' => $messageType,
				'message' => $message
			);
	 echo json_encode(mb_convert_encoding($data, "UTF-8", "UTF-8"));
 }
 public function create(){
	 $data = array();
	 $option = $this->uri->segment(2);
	 	 $username = "mwaura";
//	 	 $username = $this->session->userdata('username');
	 if($option == "client"){
		 /*  1. Get input fields  */
		 $name = $this->input->post('name');
		 $email =$this->input->post('email');
		 $mobile = $this->input->post('mobile');
		 $address = $this->input->post('address');
		 $rep_name = $this->input->post('rep_name') ;
		 $rep_mobile = $this->input->post('rep_mobile');
		 $rep_email  =  $this->input->post('rep_email');
		 $payment_terms = $this->input->post('payment_terms');
		 $vat_type = $this->input->post('vat_type');
		 $client_group =  $this->input->post('client_group');
		 /*  2. Prepare dB row update data  */
		 $data = array(
			'name'=> $name,
			 'email'=> $email,
			 'mobile'=> $mobile,
			 'address'=> $address,
			 'rep_name'=> $rep_name,
			 'rep_mobile'=> $rep_mobile,
			 'rep_email'=> $rep_email,
			 'payment_terms'=> $payment_terms,
			 'vat_type'=> $vat_type,
			 'client_group'=> $client_group,
			 'last_modified'=> date("Y-m-d H:i:s"),
			'last_modified'=> date("Y-m-d H:i:s"),
		);
		 $status = $this->Data->insert("clients", $data);
		 if ($status == true) {
			 /*insert audit trail log*/
			 $action = 'Added New Client';
			 	$this->createTrail($action, $username, $status);
			 /*insert audit trail log*/
			 $messageType = 1;
			 $message = "Client Added Successfully";
		 } else {
			 /*insert audit trail log*/
			 $action = 'Failed Create Client  Attempt';
			 $this->createTrail($action, $username, $status);
			 /*insert audit trail log*/
			 $messageType = 2;
			 $message = "  Create Client Failed";
		 }
		 $data = array(
			 'status' => $status,
			 'messageType' => $messageType,
			 'message' => $message
		 );

	 }
	 elseif($option == "material"){
		/*  1. Get input fields  */
		$description = $this->input->post('description');
		$unit_of_measurement =$this->input->post('UOM');
		$quantity = $this->input->post('quantity');
		$proposed_rate = $this->input->post('proposed_rate');
		$remarks = $this->input->post('remarks') ;
		
		/*  2. Prepare dB row update data  */
		$data = array(
			'description'=> $description,
			'unit_of_measurement'=> $unit_of_measurement,
			'quantity'=> $quantity,
			'proposed_rate'=> $proposed_rate,
			'remarks'=> $remarks,
			'last_modified'=> date("Y-m-d H:i:s"),
		);
		$status = $this->Data->insert("materials", $data);
		if ($status == true) {
			/*insert audit trail log*/
			$action = 'Added New Material';
				$this->createTrail($action, $username, $status);
			/*insert audit trail log*/
			$messageType = 1;
			$message = "Material Added Successfully";
		} else {
			/*insert audit trail log*/
			$action = 'Failed Create Material Attempt';
			$this->createTrail($action, $username, $status);
			/*insert audit trail log*/
			$messageType = 2;
			$message = "  Create Material Failed";
		}
		$data = array(
			'status' => $status,
			'messageType' => $messageType,
			'message' => $message
		);
	 }
	 elseif($option == "user"){

	 }
	 echo json_encode(mb_convert_encoding($data, "UTF-8", "UTF-8"));
 }

}
