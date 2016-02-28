<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data extends CI_Model {

  	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_data()
    {
        $this->db->select('month, wordpress, codeigniter, highcharts');
		$this->db->from('project_requests');
		$query = $this->db->get();
       	return $query->result();
    }

}