<?php
class Login extends My_Controller
{
	
	public function index()
	{
		$this->load->view('public/login');
	}
	public function admin_login()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','User name','trim|required|alpha_numeric');
		$this->form_validation->set_rules('password','Password','required');

		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('loginmodel');
			$login_id = $this->loginmodel->login_valid($username, $password);
			if( $login_id ){
				$this->session->set_userdata('user_id', $login_id);
				$this->session->set_userdata('user_name', $username);
				return redirect('admin/index');
			}
			else{
				$this->load->view('public/login');
			}
		}
		else{
			$this->load->view('public/login');
			
		}
		
	}
}