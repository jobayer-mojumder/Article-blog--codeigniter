<?php

class Article extends My_Controller
{
	public function add_article_page(){
		$data['user_name'] = $this->session->userdata('user_name');
		if($this->session->userdata('user_id')>0){
			$this->load->view('admin/add_article',$data);
		}
	}


	public function my_article_page(){
		$user_id = $this->session->userdata('user_id');
		$this->load->model('articlemodel');
		
		$data['articles'] = $this->articlemodel->my_article($user_id);
		$data['user_name'] = $this->session->userdata('user_name');
		if($this->session->userdata('user_id')>0){
			$this->load->view('admin/my_article',$data);
		}
	}


	public function article_add(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('article_title','Article Title','required');
		$this->form_validation->set_rules('article_body','Article body','required');
		
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		
		if($this->form_validation->run()){
			$title = $this->input->post('article_title');
			$body = $this->input->post('article_body');
			$user_id = $this->session->userdata('user_id');
			$this->load->model('articlemodel');
			if( $this->articlemodel->add_article($user_id, $title, $body)){
				return redirect(base_url().'admin/article');
			}
			else{
				return redirect(base_url().'admin/add_article');
			}
		}
		else{
			return redirect(base_url().'admin/add_article');
		}
	}


	public function article_update(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('article_title','Article Title','required');
		$this->form_validation->set_rules('article_body','Article body','required');
		$this->form_validation->set_rules('article_id','Article id','required');


		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if($this->form_validation->run()){
			$title = $this->input->post('article_title');
			$body = $this->input->post('article_body');
			$article_id = $this->input->post('article_id');

			$this->load->model('articlemodel');
			if( $this->articlemodel->update_article($article_id, $title, $body)){
				return redirect(base_url().'admin/article');
			}
		}
		else{
			return redirect(base_url().'admin/article');
		}
	}

	public function article_delete(){
		
	}
}