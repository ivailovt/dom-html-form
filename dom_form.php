<?php
	class dom_form extends CI_Controller{
		public function view(){
			$this->load->view('form_1');
		}
		public function sub_form(){
			$this->load->helper('form');
			$data['year'] = $this->input->get('year');
			if($this->input->get('year') == 'yes'){
				$this->load->view('welcome',$data);
			}
			else{
				$this->load->view('welcome_1',$data);
			}
		}
	}
	