<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->output->enable_profiler();
	// }

	public function index()
	{
		$this->load->view('add_new');
	}

	public function form_data(){
		// echo "in here";
		echo $this->input->post('first_name');
		// var_dump($this->input->post());
		// return 'dggg';

	}
}

//end of main controller
