<?php
class newmodel extends CI_model
{
	public function database($a)
	{
		$this->db->insert("complaint",$a);
	}
	}
?>