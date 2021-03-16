<?php

class Login extends CI_Controller
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
           
            $email = $this->input->post('txtemail');
            $pass = $this->input->post('txtpass');
          
           
           if($this->Regmodel->login($email,$pass)>0)
           {
            echo "login Successfully";
           }
           else
           {
            echo "login not  Successfully";
           }
       }
       else
       {
       	   $this->load->view('loginview');
       }

     }

}

?>