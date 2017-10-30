<?php
/**
 * Sharif Judge online judge
 * @file Hall_of_Fame.php
 * @author Stillmen Vallian
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Halloffame extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		if ($this->input->is_cli_request())
			return;
		if ( ! $this->session->userdata('logged_in')) // if not logged in
			redirect('login');
	}


	// ------------------------------------------------------------------------


	public function index()
	{
		$this->load->model('scoreboard_model');

		$data = array(
			
		);

		$this->twig->display('pages/halloffame.twig', $data);
	}
}
