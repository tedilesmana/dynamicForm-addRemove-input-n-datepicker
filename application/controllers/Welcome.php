<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('loading-button');
	}

	public function circle_progress()
	{
		$this->load->view('circle_progress');
	}

	public function loading_page()
	{
		$this->load->view('loading-page');
	}
}
