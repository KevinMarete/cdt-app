<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Screening extends CI_Controller {

	public function index($page='listing')
	{	
		$data['page_title'] = 'CDT | Screening';
		$data['content_view'] = 'screening/screening_'.$page.'_view';
		$this->load->view('template/template_view', $data);
	}
}
