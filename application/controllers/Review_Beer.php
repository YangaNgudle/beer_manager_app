<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review_Beer extends CI_Controller {

	public function __constructor() {
		parent::__constructor();		
	}

	public function index($id = 0)
	{
		$this->load->model('beer_model');
        
        if($id !== 0) {
          $beer_info =  $this->beer_model->get_beer_info($id);
        }

     
		// echo "Add Beer Form On This Page";
		$this->load->view('template_parts/header');
		$this->load->view('template_parts/review_beer', array('beer_id' => $id, 'beer_info' => $beer_info[0]));
		$this->load->view('template_parts/footer');
	}

	public function add() {
        $this->load->model('beer_model');


		$beer_id = $this->input->post('beer_id');
		$beer_aroma = $this->input->post('beer_aroma');
		$beer_appearance = $this->input->post('beer_appearance');
		$beer_taste = $this->input->post('beer_taste');


        if($beer_id !== 0) {
          $beer_info =  $this->beer_model->get_beer_info($beer_id);
        }
		 
		$beer_review_data = array(
	        'beer_id' => $beer_id,
	        'aroma' => $beer_aroma,
	        'appearance' => $beer_appearance,
	        'taste' => $beer_taste,
	        
        );

		$this->beer_model->add_review($beer_review_data);

		$this->load->view('template_parts/header');
		$this->load->view('template_parts/review_beer', array('message' => 'Review Added Successfully', 'beer_id' => $beer_id,'beer_info' => $beer_info[0]));
		$this->load->view('template_parts/footer');
		// echo "Add Beer To The Database";
	}
}
