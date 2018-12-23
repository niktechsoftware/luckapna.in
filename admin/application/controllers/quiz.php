<?php
class Quiz extends CI_Controller{
	function quizQuestion(){
		$this->load->view("exam/quizQuestion");
	}
	function quizTest(){
		$this->load->view("exam/test");
	}
	function quizResult(){
		$data = array(
		       	"from_time" => $this->input->post("from_time"),
		       	"to_time" => $this->input->post("to_time"),
		       	"fun_title" => $this->input->post("fun_title"),
				"fun_detail" => $this->input->post("fun_detail"),
				"wonder_title" => $this->input->post("wonder_title"),
				"wonder_detail" => $this->input->post("wonder_detail"),
				"lucky_title" => $this->input->post("lucky_title"),
				"lucky_detail" => $this->input->post("lucky_detail"),
		       	"date" => date("Y-m-d")
		);
		if($this->db->insert("result",$data)){
			redirect("apanel/index");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
}