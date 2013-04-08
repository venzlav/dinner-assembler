<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class admin extends CI_Controller {

	public function index()
	{
		$data['page_title'] = 'Admin page - Dinner Assembler';
		$this->load->view('html_init', $data);
		$this->load->view('header');
		$this->load->view('admin_menu');
		$this->load->view('main_page');
		$this->load->view('footer');
	}
	//public function 
}

/* End of file main_page.php */
/* Location: ./application/controllers/main_page.php */