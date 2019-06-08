<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Screening extends CI_Controller {

	public function index($page='screening_list')
	{	
		$data['page_title'] = 'CDT | Screening';
		$data['content_view'] = 'screening/'.$page.'_view';
		$this->load->view('template/template_view', $data);
	}
}
