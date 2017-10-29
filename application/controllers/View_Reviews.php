<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_Reviews extends CI_Controller {
   
    public function __constructor() {
		parent::__constructor();		
	}
	
	public function index($beer_id = 0)
	{ 
		$this->load->model('beer_app_model');
		$this->load->model('beer_model');

		$beer_info = $this->beer_model->get_beer_info($beer_id);
		$beer_stats = $this->beer_model->get_overall_beer_averages($beer_id);

        if($beer_id !== 0) {
          $all_beer_reviews =  $this->beer_app_model->get_all_beer_reviews($beer_id);
        }


		$this->load->view('template_parts/header');
		$this->load->view('template_parts/view_reviews', array('beer_stats' => $beer_stats, 'beer_info' => $beer_info[0],'all_beer_reviews' => $all_beer_reviews));
		$this->load->view('template_parts/footer');
	}
}
