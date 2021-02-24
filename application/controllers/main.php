<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

	}
	public function ureg()
	{
		$this->load->view('userreg');
	}
	public function userreg2()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("fname","fname",'required');
		$this->form_validation->set_rules("lname","lname",'required');
		$this->form_validation->set_rules("uname","uname",'required');
		$this->form_validation->set_rules("pass","pass",'required');
		$this->form_validation->set_rules("mobile","mobile",'required');
		$this->form_validation->set_rules("email","email",'required');
		if($this->form_validation->run())
		{
			$this->load->model('Mainmodel');
			$pass=$this->input->post("pass");
			$encpass=$this->Mainmodel->encpassword($pass);
		$a=array("fname"=>$this->input->post("fname"),"lname"=>$this->input->post("lname"),"uname"=>$this->input->post("uname"),"password"=>$encpass,"mobile"=>$this->input->post("mobile"),"email"=>$this->input->post("email"));
		
		$this->Mainmodel->uregist($a);
		redirect(base_url().'main/ureg');

	    }

}
public function utable()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->utable1();
		$this->load->view('userview',$data);

	}
	public function uapprove()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->uapprove1($id);
		redirect('main/utable','refresh');

	}
	public function ureject()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->ureject1($id);
		redirect('main/utable','refresh');

	}
	public function ulog()
	{
		
		$this->load->view('ulogin');

	}
	public function ulog1()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
			$this->load->model('Mainmodel');
			$pass=$this->input->post("password");
			$email=$this->input->post("email");
			$rslt=$this->Mainmodel->uselectpass($email,$pass);
			if($rslt)
			{
				$id=$this->Mainmodel->ugetuserid($email);
				$user=$this->Mainmodel->ugetuser($id);
				$this->load->library(array('session'));
				$this->session->set_userdata(array('id'=>(int)$user->id,'status'=>$user->status));
				if($_SESSION['status']=='1')
				{
					redirect(base_url().'main/admin');
				}
				else
				{
					echo "waiting for approval";
				}
			}
			else
			{
				echo "invalid user";
			}
		}
		else{
			redirect('main/ulog','refresh');
		}


	}
	public function admin()
	{
		
		$this->load->view('adminpage');

	}
}
?>