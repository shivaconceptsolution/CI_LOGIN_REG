<?php


class Regmodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function reginsert($uid,$pass,$email,$mobile)
	{
           $x=$this->db->insert('reg',array("userid"=>$uid,"password"=>$pass,"email"=>$email,"mobile"=>$mobile));
           return $x;

	}

	function login($uid,$pass)
	{
		$res=$this->db->get_where('reg',array("email"=>$uid,"password"=>$pass));
		return $res->num_rows();
	}

}



?>