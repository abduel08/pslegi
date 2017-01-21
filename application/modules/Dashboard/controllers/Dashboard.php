<?php
	class Dashboard extends MX_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			$this->load->model('dashboard_m');
		}

		function index()
		{
			$this->template->index();
		}
	}
