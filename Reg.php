<?php
class Reg extends CI_Controller
{
      function __construct()
      {
            parent::__construct();
            $this->load->model('Regmodel');
      }

	function index()
	{
       $this->form_validation->set_rules('txtemail','username','required|valid_email');
       $this->form_validation->set_rules('txtpass','password','required|min_length[5]');
       if($this->form_validation->run())
       {
            $uid= $this->input->post('txtfname');
            $pass = $this->input->post('txtpass');
            $mobile = $this->input->post('txtmobile');
            $email = $this->input->post('txtemail');
           if($this->Regmodel->reginsert($uid,$pass,$email,$mobile))
           {
            echo "Data Inserted Successfully";
           }
           else
           {
            echo "Data not inserted Successfully";
           }
       }
       else
       {
       	   $this->load->view('regview');
       }
	}
}




?>