<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/**
 * The Data Operations Model for Naya CRM
 * @author Mwaura Gitonga
 * @date  02.07.2021
 * @mail  gitongakmwaura@gmail.com
 *      Signed :----U70XDN-------
 */
class Data_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Fetch all  Audit Trail data
	 * @return object[]
	 */
	public function get_audit_trail($params = "")
	{
		$this->db->select('id,action, status, time_of_action, ip_address, user_id, username');
		$this->db->from('audit_trail');
		if (($params != '')) {
			foreach ($params as $key => $value) {
				if ($value != null) {
					$this->db->where("$key", $value);
				}
			}
		}
		return $this->db->get()->result();
	}

	/**
	 * Fetch Audit Trail Data for a single user
	 * @param   $params //pass user related params e.g user_id, username
	 * @return array|array[]|object|object[]
	 */
	public function get_user_audit_trail($params)
	{
		$this->db->select('id,action, status, time_of_action, ip_address, user_id, username');
		$this->db->from('audit_trail');
		if ($params != '') {
			foreach ($params as $key => $value) {
				if ($value != null) {
					$this->db->where("$key", $value);
				}
			}
		}
		return $this->db->get()->result();
	}

	/**
	 * Fetch all clients' data
	 *
	 * @return object[]
	 */
	public function getClients($params = "")
	{
		$this->db->select('clients.client_id,clients.name, clients.email, clients.mobile, clients.rep_name, clients.rep_email,clients.rep_mobile,
		clients.address, clients.logo as file_name, clients.date_added, clients.last_modified');
		$this->db->from('clients');
		if (($params != '')) {
			foreach ($params as $key => $value) {
				if ($value != null) {
					$this->db->where("$key", $value);
				}
			}
		}
		return $this->db->get()->result();
	}

	/**
	 * Fetch all company details
	 * @return object[]
	 */
	public function getCompanyDetails(){
		$this->db->select('company_id,name, email, mobile, address, logo, date_added, last_modified');
		$this->db->from('company_details');
		return $this->db->get()->row();
	}

	/**
	 * Fetch all Job Types (Medium i.e Wireless, Fibre, UTP)
	 * @return object[]
	 */
	public function  getJobCategories($params = ""){
		$this->db->select('category_id, name, description,date_created, last_modified');
		$this->db->from('job_categories');
		if (($params != '')) {
			foreach ($params as $key => $value) {
				if ($value != null) {
					$this->db->where("$key", $value);
				}
			}
		}
		return $this->db->get()->result();
	}

	/**
	 * Fetch all Job Sub Types (Base Stations, P2P Installations)
	 * @return object[]
	 */
	public function  getJobSubCategories($params = ""){
		$this->db->select('sub_cat_id,category_id, name, description,date_created, last_modified');
		$this->db->from('job_subcategories');
		if (($params != '')) {
			foreach ($params as $key => $value) {
				if ($value != null) {
					$this->db->where("$key", $value);
				}
			}
		}
		return $this->db->get()->result();
	}

	/**
	 * Fetch all Materials Line Items
	 * @return object[]
	 */
	public function getMaterials($params = ""){
		$this->db->select('materials.id,materials.description, materials.unit_of_measurement as UOM, quantity, proposed_rate as rate, remarks,
		materials.sub_cat_id, job_subcategories.name as subType, materials.date_created, materials.last_modified');
		$this->db->from('materials');
		$this->db->join("job_subcategories", "materials.sub_cat_id = job_subcategories.sub_cat_id");
		if (($params != '')) {
			foreach ($params as $key => $value) {
				if ($value != null) {
					$this->db->where("$key", $value);
				}
			}
		}
		return $this->db->get()->result();
	}

	/**
	 * Fetch all Quotes & their Status Flags (e.g expecting PO)
	 * @return object[]
	 */
	public function getQuoteStatus($params = ""){
		$this->db->select('quote_status.id, quote_status.quote_id, quote_status.status_id,quote_status.date_created, quote_status.last_modified,
		status_flags.name as status, quotes.client_id, quotes.quote_ref, quotes.user_id, users.username');
		$this->db->from('quote_status');
		$this->db->join('status_flags',"quote_status.status_id = status_flags.status_id");
		$this->db->join('quotes',"quote_status.quote_id = quotes.quote_id");
		$this->db->join('clients',"quotes.client_id = clients.client_id");
		$this->db->join('users',"quotes.user_id = users.user_id");
		if (($params != '')) {
			foreach ($params as $key => $value) {
				if ($value != null) {
					$this->db->where("$key", $value);
				}
			}
		}
		return $this->db->get()->result();
	}

	/**
	 * Fetch all Quotes Data
	 * @return object[]
	 */
	public function  getQuotes($params = ""){
		$this->db->select('quotes.quote_id, quotes.quote_ref, quotes.job_no, quotes.title, quotes.job_category, 
	quotes.job_subcategory, job_subcategories. name as jobSubType, job_categories.name as jobType, quotes.rate_card_id, quotes.additional_materials, 
		quotes.notes, quotes.assumptions, quotes.payment_terms, quotes.amount, quotes.client_id, clients.name as name, quotes.user_id, users.username, quotes.date_created, quotes.last_modified');
		$this->db->from('quotes');
		$this->db->join('job_categories',"quotes.client_id = job_categories.category_id");
		$this->db->join('job_subcategories',"quotes.client_id = job_subcategories.sub_cat_id");
		$this->db->join('clients',"quotes.client_id = clients.client_id");
		$this->db->join('users',"quotes.user_id = users.user_id");

		if (($params != '')) {
			foreach ($params as $key => $value) {
				if ($value != null) {
					$this->db->where("$key", $value);
				}
			}
		}
		$this->db->order_by('quotes.date_created', "ASC");
		$this->db->group_by('quotes.quote_id');
		return $this->db->get()->result();
	}

	/**
	 * Fetch Rate Card for a job
	 *  pass array of params to filter
	 * @param  $params
	 * @return object[]
	 */
	public function getRateCard($params = ""){
		$this->db->select('rate_cards.id,rate_cards.description, rate_cards.unit_of_measurement as UOM, quantity, svg,  proposed_rate as rate, remarks,
		rate_cards.sub_cat_id, job_subcategories.name as subType, job_categories.name as jobType, rate_cards.date_created, rate_cards.last_modified');
		$this->db->from('rate_cards');
		$this->db->join("job_subcategories", "rate_cards.sub_cat_id = job_subcategories.sub_cat_id");
		$this->db->join("job_categories", "job_subcategories.category_id = job_categories.category_id");
		if (($params != '')) {
			foreach ($params as $key => $value) {
				if ($value != null) {
					$this->db->where("$key", $value);
				}
			}
		}
		$this->db->group_by('rate_cards.sub_cat_id');
		return $this->db->get()->result();
	}

	/**
	 * Fetch all Staff Data
	 * @return object[]
	 */
	public function getStaff()
	{
		$this->db->select('staff.staff_id, staff.name, staff.email, staff.mobile, department, staff.usergroup as user_group_id, user_groups.name as usergroup,
		staff.date_added, staff.last_modified');
		$this->db->from('staff');
		$this->db->join('user_groups', "staff.usergroup = user_groups.group_id");
		return $this->db->get()->result();
	}
	public function getStatusFlags(){
		$this->db->select('status_flags.status_id, status_flags.name, status_flags.description,		 
		status_flags.date_added, status_flags.last_modified');
		$this->db->from('status_flags');
		return $this->db->get()->result();
	}
	public function getUserGroups(){
		$this->db->select('user_groups.group_id, user_groups.name, user_groups.description,		 
		user_groups.date_added, user_groups.last_modified');
		$this->db->from('user_groups');
		return $this->db->get()->result();
	}
	public function getUsers(){
		$this->db->select('users.user_id, users.username, users.password, users.usergroup as user_group_id, 
		 user_groups.name as usergroup, users.date_added, users.last_modified');
		$this->db->from('users');
		$this->db->join('user_groups', "users.usergroup = user_groups.group_id");
		return $this->db->get()->result();
	}


}
