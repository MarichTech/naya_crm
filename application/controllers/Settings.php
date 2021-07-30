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

	public function user_groups()
	{

		$user_groups = $this->Data->getUserGroups();
		$result = array(
			'user_groups' => $user_groups
		);
		echo json_encode($result);
	}
	
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
			$status = $this->Data->update("materials", 'id', $material_id, $insert_data);
			if ($status == true) {
				/*insert audit trail log*/
				$action = 'Material Details Updated';
				$this->createTrail($action, $username, $status);
				/*insert audit trail log*/
				$messageType = 1;
				$message = "Material Details Updated Successfully";
			} else {
				/*insert audit trail log*/
				$action = 'Failed Material Details Update Attempt';
				$this->createTrail($action, $username, $status);
				/*insert audit trail log*/
				$messageType = 2;
				$message = "Material Details Not Updated";
			}
			

		
		}else if($option =="user"){
			/* 1. Get input fields */
			
			$staff_id = $this->input->post('staff_id');
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$mobile = $this->input->post('mobile');
			$department = $this->input->post('department');
			$user_group_id = $this->input->post('user_group_id');
			
			
			/*  2. Prepare dB row update data  */
			$insert_data = array(
				'name'=> $name,
				'email'=> $email,
				'mobile'=> $mobile,
				'department'=> $department,
				'usergroup'=> $user_group_id,
				'last_modified'=> date("Y-m-d H:i:s"),
			);
			

			$insert_data_user = array(
				'username' => $name,
				'usergroup' => $user_group_id,
				'last_modified' => date("Y-m-d H:i:s"),
			);
			
			/* 3. update dB data*/

			$status = $this->Data->update("staff", 'staff_id', $staff_id, $insert_data);
			$status_2 = $this->Data->update("users", 'user_id', $staff_id, $insert_data_user);
			

			
			if ($status && $status_2 == true) {
				/*insert audit trail log*/
				$action = 'Staff Details Updated';
				$this->createTrail($action, $username, $status);
				/*insert audit trail log*/
				$messageType = 1;
				$message = "Staff Details Updated Successfully";
			} else {
				/*insert audit trail log*/
				$action = 'Staff Material Details Update Attempt';
				$this->createTrail($action, $username, $status);
				/*insert audit trail log*/
				$messageType = 2;
				$message = "Staff Details Not Updated";
			}
		}else if($option == ""){

		}else if($option == ""){

		}else if($option == ""){}

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
	/* 1. Get input fields */
		$name = $this->input->post('name');
		$email =$this->input->post('email');
		$mobile = $this->input->post('mobile');
		$department = $this->input->post('department');
		$user_group_id = $this->input->post('user_group_id') ;
		$password = $this->input->post('password');

		$data = array(
			'name'=> $name,
			'email'=> $email,
			'mobile'=> $mobile,
			'department'=> $department,
			'usergroup'=> $user_group_id,
			'date_added'=> date("Y-m-d H:i:s"),
		);

		$data_user = array(
			'username' => $name,
			'password' => $password,
			'usergroup'=> $user_group_id,
			'date_created'=> date("Y-m-d H:i:s"),
		);

		$status = $this->Data->insert("staff", $data);
		$status_2 = $this->Data->insert("users", $data_user); 

		if ($status && $status_2 == true) {
			/*insert audit trail log*/
			$action = 'Added New Staff';
				$this->createTrail($action, $username, $status);
			/*insert audit trail log*/
			$messageType = 1;
			$message = "Staff Added Successfully";
		} else {
			/*insert audit trail log*/
			$action = 'Failed Create Staff Attempt';
			$this->createTrail($action, $username, $status);
			/*insert audit trail log*/
			$messageType = 2;
			$message = "  Create Staff Failed";
		}
		$data = array(
			'status' => $status,
			'messageType' => $messageType,
			'message' => $message
		);
		
	
	}else if($option == ""){

	}else if($option == ""){

	}else if($option == ""){}
	 echo json_encode(mb_convert_encoding($data, "UTF-8", "UTF-8"));
 }

}
