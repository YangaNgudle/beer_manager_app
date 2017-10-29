<?php

class Beer_App_Model extends CI_Model {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
         
    }

    public function get_all_beers() {
      $this->db->order_by('id', "desc");
      $query = $this->db->get('tbl_beer');
      
      return $query->result();

    }

    public function get_all_beer_reviews($beer_id) {
    	$query = $this->db->get_where('beer_reviews', array('beer_id' => $beer_id));

        return $query->result();
    }

    public function last_beer_entry() {
		$last_beer_entry =$this->db->select('time_stamp')->order_by('id',"desc")->limit(1)->get('tbl_beer')->row();
        
        if(empty($last_beer_entry)) {
        	return strtotime(date("1875-09-09 00:00:00"));
        }

		return strtotime($last_beer_entry->time_stamp);
	}

    
}