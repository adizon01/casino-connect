<?php

class MY_Controller extends CI_Controller {

	public $data = array();
	
	function __contruct(){
		parent::__contruct();
		$this->data['errors'] = array();
		$this->data['site_name'] = config_item('site_name');

	}

}