<?php

class Beer_Model extends CI_Model {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
         
    }

    public function save_beer($beer_data) {
        $this->db->insert('tbl_beer', $beer_data);
    }

    public function add_review($review_data) {
    	$this->db->insert('beer_reviews', $review_data);
    }

    public function get_beer_info($id) {
    	$query = $this->db->get_where('tbl_beer', array('id' => $id));

    	return $query->result();

    }

    public function get_overall_beer_averages($beer_id) {
    	$query = $this->db->get_where('beer_reviews', array('beer_id' => $beer_id));

    	$data = $query->result();

    	if(empty($data)) {
    		return array('aroma' => 0, 'appearance' => 0, 'taste' => 0);
    	}
        
        $sum_aroma = 0;
        $sum_appearance = 0;
        $sum_taste = 0;
        $count = count($data);

        foreach($data as $d) {
        	$sum_aroma += $d->aroma;
        	$sum_appearance += $d->appearance;
        	$sum_taste += $d->taste;
        }

        $overall_beer_average = array(
          'aroma' => $sum_aroma / $count,
          'appearance' => $sum_appearance / $count,
          'taste' => $sum_taste / $count,
        );
    	
    	return $overall_beer_average;
    }
}