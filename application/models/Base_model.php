<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/**
 * The Base Model for Naya CRM
 * @author Mwaura Gitonga
 * @date  02.07.2021
 * @mail  gitongakmwaura@gmail.com
 *      Signed :----U70XDN-------
 */
class Base_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	/**
	 * @param $data
	 * @return bool
	 */
	public function insertTrail($data)
	{
		return $this->db->insert("audit_trail", $data);

	}
}
