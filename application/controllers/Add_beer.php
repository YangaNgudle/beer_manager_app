<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_Beer extends CI_Controller {

	public function __constructor() {
		parent::__constructor();		
	}

	public function index()
	{
		// echo "Add Beer Form On This Page";
		$this->load->view('template_parts/header');
		$this->load->view('template_parts/add_beer');
		$this->load->view('template_parts/footer');
	}

	public function add() {
        $this->load->model('beer_model');
        $this->load->model('beer_app_model');

        $last_entry = $this->beer_app_model->last_beer_entry();

        $dayAgo = strtotime('-24 hours');
        
        if($last_entry >= $dayAgo) {
        	$this->load->view('template_parts/header');
			$this->load->view('template_parts/add_beer', array('message' => 'You can only add one beer every 24 hours'));
			$this->load->view('template_parts/footer');
			return ;
        }

        

		$beer_name = $this->input->post('beer_name');
		$beer_description = $this->input->post('beer_description');
		$beer_ibu = $this->input->post('beer_ibu');
		$beer_abv = $this->input->post('beer_abv');
		$beer_calories = $this->input->post('beer_calories');
		$beer_style = $this->input->post('beer_style');
		$beer_brew_location = $this->input->post('beer_brew_location');
		 
		$beer_data = array(
	        'beer_name' => $beer_name,
	        'beer_description' => $beer_description,
	        'beer_ibu' => $beer_ibu,
	        'beer_calories' => $beer_calories,
	        'beer_abv' => $beer_abv,
	        'beer_style' => $beer_style,
	        'beer_brew_location' => $beer_brew_location,
        );

		$this->beer_model->save_beer($beer_data);

		$this->load->view('template_parts/header');
		$this->load->view('template_parts/add_beer', array('message' => 'Beer Added Successfully'));
		$this->load->view('template_parts/footer');
		// echo "Add Beer To The Database";
	}

	public function last_beer_entry() {
		$this->load->model('beer_app_model');
		$this->beer_app_model->last_beer_entry();
	}
}
