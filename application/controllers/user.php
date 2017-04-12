<?php

class User extends My_Controller
{
	public function index(){
		$this->load->view('public/home');
	}
	public function registration_page(){
		$this->load->view('public/public_registration');	
	}
	public function all_article(){
		$this->load->model('articlemodel');
		
		$data['articles'] = $this->articlemodel->all_article();
		$this->load->view('public/all_article',$data);	
	}
}