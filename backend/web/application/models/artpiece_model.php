<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * User Model 
 * 
 */

class Art_piece extends CI_Model {
	
	var $id;
	var $per_page;
	var $art_piece_tbl

	public __construct() {
		parent::__construct();
	}
	
	function get_items() {
		$this->db->limit('30', $this->per_page);
		
		$qry = $this->db->get($this->art_piece_tbl);
		
		return $qry->result();
	}
}

/* End of file artpiece_model.php */
/* Location: ./application/models/artpiece_model.php */ 