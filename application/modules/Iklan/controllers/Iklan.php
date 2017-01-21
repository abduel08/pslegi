<?php

	class Iklan extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$this->template->header();
			$this->load->view('iklan_v');
		}
	}