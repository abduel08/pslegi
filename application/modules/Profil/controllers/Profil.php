<?php
	class Profil extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		function index()
		{
			
			$this->template->header();
			$this->load->view('profil_v');
		}

	}