<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{


	    $this->load->model("memberlogin_model");
        $this->load->model("membership_model");
        $this->load->model("mission_model");

        $this->load->view("profil");


	}

	public function signup(){
	    $this->load->view("signup");
    }


    public function insert(){

        $this->load->model("memberlogin_model");


	    $email=$this->input->post("email");
        $password=$this->input->post("password");

        $data = array(
	        "email"  => $email,
	        "password"  => $password
        );

	    $add = $this->memberlogin_model->add($data);

	    echo $add;

    }

}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */