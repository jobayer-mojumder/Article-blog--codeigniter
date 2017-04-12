<?php

class Admin extends My_Controller
{
	public function index(){
		$this->load->model('articlemodel');
		
		$data['articles'] = $this->articlemodel->all_article();
		$data['user_name'] = $this->session->userdata('user_name');
		if($this->session->userdata('user_id')){
			$this->load->view('admin/home',$data);
		}
	}
	public function logout(){
		$l = 0;
		$this->session->set_userdata('user_id', $l);
		$this->session->set_userdata('user_name', $l);
		redirect('login');
	}
}