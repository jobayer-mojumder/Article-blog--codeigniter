<?php

class Registration extends My_Controller
{
	public function user_registration(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname', 'Firstname','required|alpha');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required|alpha');
		$this->form_validation->set_rules('username', 'Username','required|is_unique[users.username]|alpha_numeric|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if($this->form_validation->run()){
			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('registrationmodel');
			if($this->registrationmodel->user_registration($firstname, $lastname, $username, $password)){
				return redirect('login/admin_login');
			}
			else{
				$this->load->view('public/public_registration');
			}
		}
		else{
			$this->load->view('public/public_registration');
		}
	}
}