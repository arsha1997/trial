<?php
class Mainmodel extends CI_model
{
	public function encpassword($pass)
	{
		return password_hash($pass,PASSWORD_BCRYPT);
	}
	public function uregist($a)
	{
		$this->db->insert("user",$a);
	}
	public function utable1()
	{
		$this->db->select('*');
		$qry=$this->db->get("user");
		return $qry;
	}
	public function uapprove1($id)
	{
		$this->db->set('status','1');
		$this->db->where("id",$id);
		$this->db->update("user");

	}
	public function ureject1($id)
	{
		$this->db->set('status','2');
		$this->db->where("id",$id);
		$this->db->update("user");

	}
	public function uselectpass($email,$pass)
	{
		$this->db->select('password');
		$this->db->from("user");
		$this->db->where("email","$email");
		$query=$this->db->get()->row('password');
		return $this->uverifypass($pass,$query);
		}
		public function uverifypass($pass,$query)
		{
			return password_verify($pass,$query);
		}
		public function ugetuserid($email)
		{
			$this->db->select('id');
			$this->db->from("user");
			$this->db->where("email",$email);
			return $this->db->get()->row('id');

		}
		public function ugetuser($id)
		{
			$this->db->select('*');
			$this->db->from("user");
			$this->db->where("id",$id);
			return $this ->db->get()->row();

		}
	
	
	
	

	
	

	
}
?>