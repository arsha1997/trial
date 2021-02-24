<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class new1 extends CI_Controller {
	public function index()
	{}
	public function view()
	{
		$this->load->view('complaint');
	}
	public function insert()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("subject","subject",'required');
		$this->form_validation->set_rules("complaint","complaint",'required');
		$this->form_validation->set_rules("date","date",'required');
		if($this->form_validation->run())
		{
			$a=array("subject"=>$this->input->post("subject"),"complaint"=>$this->input->post("complaint"),"currentdate"=>$this->input->post("date"));
			$this->load->model('newmodel');
			$this->newmodel->database($a);
		}

	}
	public function cmptable()
	{
		$this->load->view('complainttable');
	}

	}
?>