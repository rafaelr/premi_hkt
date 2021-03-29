<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{

		$this->load->model("courses_model");
		$courses = $this->courses_model->show_courses();

		$this->load->model("team_model");
		$team = $this->team_model->show_team();

		$data = array(
			"scripts" => array(
				"plugins.bundle.js",
				"scripts.bundle.js",
				"prismjs.bundle.js",
				"apexcharts.js",
				"toastr.js",
				"kt.js"
			),
			"courses" => $courses,
			"team" => $team
		);
		$this->template->show("home.php", $data);
	}

}
