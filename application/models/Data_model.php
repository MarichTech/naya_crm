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
	 * get all quote references
	 * @return CI_DB_result
	 */
	public function getReferences()
	{
		$this->db->select('ref_id,index_id, reference');
		$this->db->from('quote_references');
		return $this->db->get()->result();
	}

	/**
	 * get Last Quote Reference
	 * @return array|mixed|object|null
	 */
	public function getLastReference()
	{
		$this->db->select('ref_id,index_id, quote_ref');
		$this->db->from('quote_references');
		$this->db->order_by('ref_id', 'DESC');
		$this->db->limit(1);
		return $this->db->get()->row();
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
		$this->db->select('clients.client_id, clients.client_group ,clients.name, clients.email, clients.mobile, clients.rep_name, clients.rep_email,clients.rep_mobile,
		clients.address,clients.payment_terms, clients.vat_type, clients.logo as file_name, clients.date_added, 
		clients.last_modified, vat.id as vat_id, vat.description as vat, vat.rate');
		$this->db->from('clients');
		$this->db->join("vat", "clients.vat_type = vat.id");
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
	 * Fetch all Quote Types data
	 *
	 * @return object[]
	 */
	public function quoteTypes($params = "")
	{
		$this->db->select('quote_types.id, quote_types.description, quote_types.date_created, quote_types.last_modified');
		$this->db->from('quote_types');
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
		materials.sub_cat_id, materials.date_created, materials.last_modified');
		$this->db->from('materials');
		//$this->db->join("job_subcategories", "materials.sub_cat_id = job_subcategories.sub_cat_id");
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
	quotes.job_sub_category, job_subcategories.name as jobSubType, job_categories.name as jobType, quotes.rate_card_id, quotes.additional_materials, 
		quotes.notes, quotes.assumptions, quotes.payment_terms, quotes.amount, quotes.client_id,
		 clients.name as name, clients.email, clients.mobile, clients.rep_name, clients.rep_mobile, 
		 quotes.user_id, users.username, quotes.date_created, quotes.last_modified, quotes.quote_type as quote_type_id,
		  quote_types.description as quote_type ');
		$this->db->from('quotes');
		$this->db->join('job_categories',"quotes.job_category = job_categories.category_id");
		$this->db->join('job_subcategories',"quotes.job_sub_category = job_subcategories.sub_cat_id");
		$this->db->join('clients',"quotes.client_id = clients.client_id");
		$this->db->join('users',"quotes.user_id = users.user_id");
		$this->db->join('quote_types',"quotes.quote_type = quote_types.id");

		if (($params != '')) {
			foreach ($params as $key => $value) {
				if ($value != null) {
					$this->db->where("$key", $value);
				}
			}
		}
		$this->db->order_by('quotes.date_created', "DESC");
		$this->db->group_by('quotes.quote_id');
		return $this->db->get()->result();
	}

	/**
	 * Fetch Rate Card for a job
	 *  pass array of params to filter
	 * @param  $params
	 * @return object[]
	 */
	public function getRateCards($params = ""){
//		var_dump($params);
		$this->db->select('rate_cards.id,rate_cards.description, rate_cards.unit_of_measurement as UOM, rate_cards.client_id, quantity, svg,  proposed_rate as rate, remarks,
		rate_cards.sub_cat_id, job_subcategories.name as subType, job_categories.name as jobType, rate_cards.date_created,
		 rate_cards.last_modified, clients.name as provider');
		$this->db->from('rate_cards');
		$this->db->join("job_subcategories", "rate_cards.sub_cat_id = job_subcategories.sub_cat_id");
		$this->db->join("job_categories", "job_subcategories.category_id = job_categories.category_id");
		$this->db->join("clients", "rate_cards.client_id = clients.client_id");
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
	public function getRateCard($params = ""){
		$this->db->select('rate_cards.id,rate_cards.description, rate_cards.unit_of_measurement as UOM, quantity, svg,  proposed_rate as rate, remarks,
		rate_cards.sub_cat_id,rate_cards.date_created, rate_cards.last_modified, job_subcategories.name as subType,');
		$this->db->from('rate_cards');
		$this->db->join("job_subcategories", "rate_cards.sub_cat_id = job_subcategories.sub_cat_id");

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
	 * Fetch all Staff Data
	 * @return object[]
	 */
	public function getStaff($params = "")
	{
		$this->db->select('staff.staff_id, staff.name, staff.email, staff.mobile, staff.department, staff.usergroup as user_group_id, user_groups.name as usergroup,
		staff.date_added, staff.last_modified, users.user_id, users.username');
		$this->db->from('staff');
		$this->db->join('user_groups', "staff.usergroup = user_groups.group_id");
		$this->db->join('users', "staff.user_id = users.user_id");
		if (($params != '')) {
			foreach ($params as $key => $value) {
				if ($value != null) {
					$this->db->where("$key", $value);
				}
			}
		}
		return $this->db->get()->result();
	}
	public function getStatusFlags(){
		$this->db->select('status_flags.status_id, status_flags.name, status_flags.description,		 
		status_flags.date_added, status_flags.last_modified');
		$this->db->from('status_flags');
		return $this->db->get()->result();
	}
	public function getUserGroups($params = ""){
		$this->db->select('user_groups.group_id, user_groups.name, user_groups.description,		 
		user_groups.date_created, user_groups.last_modified');
		$this->db->from('user_groups');
		if (($params != '')) {
			foreach ($params as $key => $value) {
				if ($value != null) {
					$this->db->where("$key", $value);
				}
			}
		}
		return $this->db->get()->result();
	}
	public function getUsers($params = ""){
		$this->db->select('users.user_id, users.username, users.password, users.usergroup as user_group_id, 
		 user_groups.name as usergroup, users.date_created, users.last_modified');
		$this->db->from('users');
		$this->db->join('user_groups', "users.usergroup = user_groups.group_id");
		if (($params != '')) {
			foreach ($params as $key => $value) {
				if ($value != null) {
					$this->db->where("$key", $value);
				}
			}
		}
		$this->db->order_by('user_id', 'ASC');
		return $this->db->get()->result();
	}

	public function insert($table, array $data)
	{
		try{

			$this->db->insert($table, $data);
			return true;
		}catch (Exception $exception){

			return false;
		}
	}

	/**
	 * Get all currencies data
	 * @param string $params
	 * @return array|array[]|object|object[]
	 */
	public function getCurrencies($params = "")
	{
		$this->db->select('*');
		$this->db->from('currencies');
		$this->db->order_by("currencies.id", "ASC");
		if ($params != '') {
			foreach ($params as $key => $value) {
				if ($value != null) {
					$this->db->where("$key", $value);
				}
			}
		}
		return $this->db->get()->result();
	}

	public function dataExists($table, $column, $value)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($column, $value);
		$query =$this->db->get();
		if($query->num_rows >0){
			return true;
		}else{
			return false;
		}
	}
	public function update($table, $column, $field_id, $data)
	{
		$this->db->where($column, $field_id);
		try{
		$this->db->update($table, $data);
		return  true;
	}catch (Exception $exception) {
			//var_dump($this->db->error());
			return false;

		}

	}


	public function getClientGroups($params= "")
	{
		$this->db->select('*');
		$this->db->from('client_groups');
		$this->db->order_by("client_groups.id", "ASC");
		if ($params != '') {
			foreach ($params as $key => $value) {
				if ($value != null) {
					$this->db->where("$key", $value);
				}
			}
		}
		return $this->db->get()->result();
	}

	public function getVatTypes($params= "")
	{
		$this->db->select('*');
		$this->db->from('vat');
		$this->db->order_by("vat.id", "ASC");
		if ($params != '') {
			foreach ($params as $key => $value) {
				if ($value != null) {
					$this->db->where("$key", $value);
				}
			}
		}
		return $this->db->get()->result();
	}

    public function login_validation($username, $password)
    {
		$this->db->select("*");
		$this->db->from("users");
		$this->db->where("username", $username);
		$result = $this->db->get()->row();
		if (($result != null)) {
			$hashed = $result->password;
			if ($this->bcrypt->compare($password, $hashed)) {
			/*	echo "bcrypt match";  */
				return $result;
			} else {
				return false;
			}
		} else {
			return false;
		}
    }
    public function get_active_sessions($params= ""){
		$now = date('Y-m-d H:i:s');
		$this->db->select("*");
		$this->db->from("active_sessions");
		$this->db->where("start_time <", $now);
		$this->db->like("end_time", "0000-00-00 00:00:00");
		if ($params != '') {
			foreach ($params as $key => $value) {
				if ($value != null) {
					$this->db->where("$key", $value);
				}
			}
		}
		$query = $this->db->get();
		if($query->num_rows() >0 ){
			return $query->result();
		}else{
			return 0;
		}
	}



}
