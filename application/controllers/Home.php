<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
   
    public function __constructor() {
		parent::__constructor();		
	}
	
	public function index()
	{

		$this->load->model('beer_app_model');

		$all_beers = $this->beer_app_model->get_all_beers();
        

		$this->load->view('template_parts/header');
		$this->load->view('template_parts/beer_list', array('all_beers' => $all_beers));
		$this->load->view('template_parts/footer');
	}
}
