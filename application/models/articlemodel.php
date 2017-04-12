<?php

class Articlemodel extends CI_Model
{
	public function my_article($id){
		$q = $this->db->query("SELECT * FROM articles WHERE user_id = $id");
		return $q->result();
	}
	public function all_article(){
		$q = $this->db->query("SELECT * FROM articles ");
		return $q->result();
	}

	public function add_article($id, $title, $body){
		$this->db->set('title',$title);
		$this->db->set('body',$body);
		$this->db->set('user_id',$id);
		$this->db->insert('articles');
		return TRUE;
	}
	public function update_article($id, $title, $body){
		//echo $id;
		$data=array('title'=>$title,'body'=>$body);
		$q = $this->db->update('articles', $data, "id = $id");
		return TRUE;
	}
	public function delete_article($id){
		
	}
}