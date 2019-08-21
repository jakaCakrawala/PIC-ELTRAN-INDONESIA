<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Chassis_m');
		$this->load->model('Content_m');
		$this->load->model('Content_history_m');
		$this->load->model('Gps_m');
		$this->load->model('Gps_history_m');
		$this->load->library('session');
	}

	public function index()
	{
		$this->data['chassis'] = $this->Chassis_m->get();
		$this->load->view('admin/admin_dashboard',$this->data);
	}

	public function asset()
	{
		$this->data['chassis'] = $this->Chassis_m->get();
		$this->load->view('admin/admin_management',$this->data);
	}

	public function add_chassis()
	{

		$data = $this->Chassis_m->array_from_post(
			array(
				'assets_id_chassis',
				'code_train',
				'code_carriage'
				));
		$data['create_date']   = date('Y-m-d H:i:s');
		$simpan = $this->Chassis_m->save($data,null);

		if ($simpan == 1) {
        
            $this->session->set_flashdata('tambah_s', 'tambah');    
            redirect('Admin_c');
        
        }elseif($simpan == -1) {
            
            $this->session->set_flashdata('error_id_null_s', 'error');    
            redirect('Admin_c');
       
        }else{

            $this->session->set_flashdata('peringatan_s', 'peringatan');
          	redirect('Admin_c');
        
        }

	}

	public function halaman_chassis($id)
	{
		$this->data['chassis'] = $this->Chassis_m->get_by(array('assets_id_chassis' => $id));
		$this->load->view('admin/admin_ubah_chassis',$this->data);
	}

	public function update_chassis($id)
	{

		$data = $this->Chassis_m->array_from_post(
			array(
				'code_train',
				'code_carriage',
				));
		$data['update_date']   = date('Y-m-d H:i:s');
		$simpan = $this->Chassis_m->save($data,$id);

		if ($simpan == 1) {
        
            $this->session->set_flashdata('tambah_s', 'tambah');    
            redirect('Admin_c/asset');
        
        }elseif($simpan == -1) {
            
            $this->session->set_flashdata('error_id_null_s', 'error');    
            redirect('Admin_c/asset');
       
        }else{

            $this->session->set_flashdata('peringatan_s', 'peringatan');
          	redirect('Admin_c/asset');
        
        }

	}



	public function halaman_content($id)
	{

		if (!empty(getContent($id)->id_content)) {
			$this->data['id_chassis'] = $id;
			$con =  getContent($id)->id_content;
			$this->data['content'] = $this->Content_m->get_by(array('id_content' => $con ));
			$this->load->view('admin/admin_ubah_Content',$this->data);
		} else {
			$this->data['id_chassis'] = $id;
			$this->load->view('admin/admin_add_Content',$this->data);
		}
				
		
	}

	public function add_content()
	{

		$data = $this->Content_m->array_from_post(
			array(
				'train_name',
				'origin',
				'destinantion',
				'announcement',
				'assets_id_chassis',
				'tag_rear',
				'tag_front'
				));
		$data['create_date']   = date('Y-m-d H:i:s');
		$simpan = $this->Content_m->save($data,null);
		$history = $this->Content_history_m->save($data,null);

		if ($simpan == 1 &&  $history == 1) {
        
            $this->session->set_flashdata('tambah_s', 'tambah');    
            redirect('Admin_c');
        
        }elseif($simpan == -1 && $history == -1) {
            
            $this->session->set_flashdata('error_id_null_s', 'error');    
            redirect('Admin_c');
       
        }else{

            $this->session->set_flashdata('peringatan_s', 'peringatan');
          	redirect('Admin_c');
        
        }

	}

	public function update_content($id)
	{

		$data = $this->Content_m->array_from_post(
			array(
				'train_name',
				'origin',
				'destinantion',
				'announcement',
				'tag_rear',
				'tag_front'
				));
		$dataHistory = $this->Content_m->array_from_post(
			array(
				'train_name',
				'origin',
				'destinantion',
				'announcement',
				'assets_id_chassis',
				'tag_rear',
				'tag_front'
				));
		$data['update_date']   = date('Y-m-d H:i:s');
		$simpan = $this->Content_m->save($data,$id);
		$dataHistory['create_date']   = date('Y-m-d H:i:s');
		$history = $this->Content_history_m->save($dataHistory,null);

		if ($simpan == 1 &&  $history == 1) {
        
            $this->session->set_flashdata('tambah_s', 'tambah');    
            redirect('Admin_c/asset');
        
        }elseif($simpan == -1 && $history == -1) {
            
            $this->session->set_flashdata('error_id_null_s', 'error');    
            redirect('Admin_c/asset');
       
        }else{

            $this->session->set_flashdata('peringatan_s', 'peringatan');
          	redirect('Admin_c/asset');
        
        }

	}


	public function login()
	{
		$this->load->view('login/login_view');
	}

}

/* End of file admin_c.php */
/* Location: ./application/controllers/admin/admin_c.php */