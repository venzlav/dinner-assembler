<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class MainPage extends CI_Controller {

	public function index()
	{
		$this->load->view('html_init');
		$this->load->view('header');
		$this->load->view('main_page');
		$this->load->view('footer');
	}
}

/* End of file main_page.php */
/* Location: ./application/controllers/main_page.php */