<?php

	class Info extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$this->template->header();
			$this->load->view('info_v');
		}
	}