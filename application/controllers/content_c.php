<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function geteway_id_gerbong()
	{
		$this->load->view('admin/content/view_gateway_id_gerbong');
	}

	public function assets_management_manager()
	{
		$this->load->view('admin/content/view_assets_management_manager');
	}

	public function text_in_command_gerbong()
	{
		$this->load->view('admin/content/view_text_in_command_gerbong');
	}

	public function gerbong_location()
	{
		$this->load->view('admin/content/view_gerbong_location');
	}

	public function Manager_On_Duty_Gerbong()
	{
		$this->load->view('admin/content/view_gerbong_manager_on_duty');
	}

	public function Logger_System_Gerbong()
	{
		$this->load->view('admin/content/view_logger_system_gerbong');
	}

	public function cctv()
	{
		$this->load->view('admin/under_maintance');
	}

}

/* End of file content_c.php */
/* Location: ./application/controllers/content_c.php */