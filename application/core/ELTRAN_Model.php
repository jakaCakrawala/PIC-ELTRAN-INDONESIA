<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ELTRAN_Model extends CI_Model {

	public $_database = '';
	protected $_table_name = '';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = '';
	public $rules = array();
	protected $_timestamps = FALSE;
	
	function __construct() {
		parent::__construct();
		$this->db = $this->load->database( $this->_database , TRUE);

	}

	public function get_by_query($query){

		$query = $this->db->query($query);
		return $query->result();
	}


	public function get_select_where_order($select, $where , $single = false)
	{
	
		$this->db->select($select);
		$this->db->where($where);
		return $this->get(NULL, $single);
	
	}

	
	public function array_from_post($fields){
		$data = array();
		foreach ($fields as $field) {
			$data[$field] = $this->input->post($field);
		}
		return $data;
	}
	
	public function get($id = NULL, $single = FALSE){
		
		if ($id != NULL) {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key, $id);
			$method = 'row';
		}
		elseif($single == TRUE) {
			$method = 'row';
		}
		else {
			$method = 'result';
		}
		
		// if (!count($this->db->ar_orderby)) {
		// 	$this->db->order_by($this->_order_by);
		// }
		$this->db->order_by($this->_order_by);
		return $this->db->get($this->_table_name)->$method();
	}

	public function get_desc($id = NULL, $single = FALSE){
		
		if ($id != NULL) {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key, $id);
			$method = 'row';
		}
		elseif($single == TRUE) {
			$method = 'row';
		}
		else {
			$method = 'result';
		}
		
		// if (!count($this->db->ar_orderby)) {
		// 	$this->db->order_by($this->_order_by);
		// }
		$this->db->order_by($this->_order_by,'desc');
		return $this->db->get($this->_table_name)->$method();
	}

	public function get_desc_limit($id = NULL, $single = FALSE,$lim){
		
		if ($id != NULL) {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key, $id);
			$method = 'row';
		}
		elseif($single == TRUE) {
			$method = 'row';
		}
		else {
			$method = 'result';
		}
		
		// if (!count($this->db->ar_orderby)) {
		// 	$this->db->order_by($this->_order_by);
		// }
		$this->db->order_by($this->_order_by,'desc');
		$this->db->limit($lim);
		return $this->db->get($this->_table_name)->$method();
	}

	
	public function get_by($where, $single = FALSE){

		$this->db->where($where);
		$this->db->order_by($this->_order_by);
		return $this->get(NULL, $single);
	}

	public function get_by_desc($where, $single = FALSE){

		$this->db->where($where);
		$this->db->order_by($this->_order_by,'DESC');
		return $this->get(NULL, $single);
	}

	public function get_by_desc_limit($where, $single = FALSE , $lim){

		$this->db->where($where);
		$this->db->limit($lim);
		$this->db->order_by($this->_order_by,'DESC');
		return $this->get(NULL, $single);
	}

	public function login($where, $single = FALSE){

		$this->db->where($where);
		$this->db->limit(1);
		return $this->get(NULL, $single);
	}

	public function get_count_status_laporan_gaji($where , $single = false)
	{
		# code...
		$this->db->where($where);
		$this->db->select('COUNT(status_periode_gaji) as total');
		$this->db->order_by($this->_order_by,'desc');
		return $this->get(NULL, $single);
	}

	public function get_count_uk_kt_kadep($where,$single =  FALSE)
	{

		$query = $this->db->query('SELECT unit_Kerja,COUNT(NIK) total
					FROM
						(
					    select unit_Kerja,NIK
					    from karyawan
					    union all
					    select unit_Kerja,NIK
					    from karyawan_kadep_len
					    ) t
					group by unit_Kerja');

		return $query->result();

		// $this->db->where($where);
		// $this->db->select('unit_Kerja, COUNT(NIK)  as total');
		// $this->db->group_by('unit_Kerja');
		// return $this->get(NULL, $single);	 

	}
	public function get_count_uk($where,$single =  FALSE)
	{
		
		$this->db->where($where);
		$this->db->select('unit_Kerja, COUNT(NIK)  as total');
		$this->db->group_by('unit_Kerja');
		return $this->get(NULL, $single);
	}

	public function get_count_uk_departemen_kadep($where,$single =  FALSE)
	{
		
		$this->db->where($where);
		$this->db->select('unit_Kerja, COUNT(NIK)  as total');
		$this->db->group_by('unit_Kerja');
		return $this->get(NULL, $single);	 

	}

	public function get_sum($where){

		$this->db->select_sum('thp');
		$this->db->select_sum('bpjs_tk');
		$this->db->select_sum('bpjs_kes');
		$this->db->select_sum('arisan');
		$this->db->select_sum('arisan_periska');
		$this->db->select_sum('koperasi');
		$this->db->select_sum('dana_pensiun');
		$this->db->select_sum('ikl');
		$this->db->select_sum('transfer_gaji');
		$this->db->where($where);
		return $this->get(NULL,false);
	}

	public function get_sum_kwt_thl($where){
		$this->db->select_sum('honor_Bulanan');
		$this->db->select_sum('jumlah_total');		
		$this->db->select_sum('bpjs_tk');
		$this->db->select_sum('bpjs_kes');
		$this->db->select_sum('arisan');
		$this->db->select_sum('koperasi');
		$this->db->select_sum('gaji_ditransfer');
		$this->db->select_sum('lain_lain');
		$this->db->where($where);
		return $this->get(NULL,false);
	}

	public function get_sum_uk_kwt_thl($where){
		$this->db->select('unitKerja');
		$this->db->select_sum('jumlah_total');
		$this->db->where($where);
		$this->db->group_by('unitKerja'); 
		return $this->get(NULL,false);
	}

	public function get_sum_uk($where){
		$this->db->select('unitKerja');
		$this->db->select_sum('thp');
		$this->db->where($where);
		$this->db->group_by('unitKerja'); 
		return $this->get(NULL,false);
	}
	
	
	public function save($data, $id = NULL){
		
		// Set timestamps
		if ($this->_timestamps == TRUE) {
			$now = date('Y-m-d H:i:s');
			$id || $data['dibuat'] = $now;
			$data['diedit'] = $now;
		}
		
		// Insert
		if ($id == NULL) {
			// !isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
			$this->db->set($data);
			$this->db->insert($this->_table_name);
			$id = $this->db->insert_id();
			return $this->db->affected_rows();
		}
		// Update
		else {
			// $filter = $this->_primary_filter;
			// $id = $filter($id);
			$this->db->set($data);
			$this->db->where($this->_primary_key, $id);
			$this->db->update($this->_table_name);
			return $this->db->affected_rows();
		}
		
		return $id;
	}


	public function save_multiple($data){
		return $this->db->insert_batch($this->_table_name, $data);
	}

	public function update_multiple($data){
		return $this->db->update_batch($this->_table_name, $data ,$this->_primary_key);
	}
	
	// delete data
	public function delete($id){
		// $filter = $this->_primary_filter;
		// $id = $filter($id);
		
		if (!$id) {
			return FALSE;
		}
		$this->db->where($this->_primary_key, $id);
		$this->db->limit(1);
		$this->db->delete($this->_table_name);

		return $this->db->error();

	}
	public function delete_by($pm,$id){
		// $filter = $this->_primary_filter;
		// $id = $filter($id);
		if (!$id) {
			return FALSE;
		}
		$conv = strval($pm);
		$this->db->where($conv,$id);
		$this->db->delete($this->_table_name);
	}

	public function delete_all()
	{
		$this->db->empty_table($this->_table_name);
	}

	public function delete_periode($id){
		// $filter = $this->_primary_filter;
		// $id = $filter($id);
		if (!$id) {
			return FALSE;
		}
		
		$this->db->where('id_periode', $id);
		$this->db->delete($this->_table_name);
	}

	public function delete_transaksi($id){
		// $filter = $this->_primary_filter;
		// $id = $filter($id);
		if (!$id) {
			return FALSE;
		}

		$this->db->where('id_transaksi', $id);
		$this->db->delete($this->_table_name);
	}
	//* delete data manajemen proyek
	public function delete_aktivitas_cash_proyek($id){
		// $filter = $this->_primary_filter;
		// $id = $filter($id);
		if (!$id) {
			return FALSE;
		}

		$this->db->where('id_proyek', $id);
		$this->db->delete($this->_table_name);
	}
	public function delete_catatan_proyek($id){
		// $filter = $this->_primary_filter;
		// $id = $filter($id);
		if (!$id) {
			return FALSE;
		}

		$this->db->where('id_proyek', $id);
		$this->db->delete($this->_table_name);
	}
	public function delete_dptppp_proyek($id){
		// $filter = $this->_primary_filter;
		// $id = $filter($id);
		if (!$id) {
			return FALSE;
		}

		$this->db->where('id_proyek', $id);
		$this->db->delete($this->_table_name);
	}
	public function delete_periode_waktu_proyek($id){
		// $filter = $this->_primary_filter;
		// $id = $filter($id);
		if (!$id) {
			return FALSE;
		}
		$this->db->where('id_proyek', $id);
		$this->db->delete($this->_table_name);
	}
	//* end delete manajemen proyek

	public function get_new_id($id = NULL, $start = NULL, $size = NULL, $barang = FALSE)
	{
		$this->db->like($this->_primary_key, $id, 'after'); 

		$this->db->select_max($this->_primary_key);
		$id_new = $this->db->get($this->_table_name)->row();
		if($id_new){
			$arrName = array();
			foreach ($id_new as $key => $value) {
				$arrName[0] = $value;
			}
			$id_new = substr($arrName[0], $start, $size) + 1;
			if(!$barang){
				if(strlen($id_new) == 1){
					$id_new = $id . '0' . $id_new;
				}else{
					$id_new = $id . $id_new;
				}
			}else{
				if(strlen($id_new) == 1){
					$id_new = $id . '0000' . $id_new;
				}elseif(strlen($id_new) == 2){
					$id_new = $id . '000' . $id_new;
				}elseif(strlen($id_new) == 3){
					$id_new = $id . '00' . $id_new;
				}elseif(strlen($id_new) == 4){
					$id_new = $id . '0' . $id_new;
				}else{
					$id_new = $id . $id_new;
				}
			}
			return $id_new;
		}else{
			if(!$barang){
				return $id . "01";
			}else{
				return $id. "00001";
			}
		}
	}
	public function GenerateIdSPJ() {

	    $query = $this->db->select($this->_primary_key)
	                      ->from($this->_table_name)
	                      ->get();
	    $row = $query->last_row();	
	    $date = date('Ym');
	    if($row){
	    
	        $idPostfix = (int)substr($row->id_form_spj_k32,9)+1;
	        $nextId = 'SPJ'.$date.STR_PAD((string)$idPostfix,4,"0",STR_PAD_LEFT);
	    
	    }
	    else{
	    	
	    	$nextId = 'SPJ'.$date.'0001';
	    
	    } // For the first time
	    return $nextId;
	
	}
	public function GenerateIdSPJDetail() {

	    $query = $this->db->select($this->_primary_key)
	                      ->from($this->_table_name)
	                      ->get();
	    $row = $query->last_row();	
	    $date = date('Ym');
	    if($row){
	    
	        $idPostfix = (int)substr($row->id_form_spj_k32,9)+1;
	        $nextId = 'SPJD'.$date.STR_PAD((string)$idPostfix,4,"0",STR_PAD_LEFT);
	    
	    }
	    else{
	    	
	    	$nextId = 'SPJD'.$date.'0001';
	    
	    } // For the first time
	    return $nextId;
	
	}

	public function GenerateNomorSPJ() {
		$years = date('y');
	    $query = $this->db->select('nomor')
	                      ->from($this->_table_name)
	                      ->get();
	    $row = $query->last_row();	
	    if($row){
	        $idPost = substr($row->nomor, 0 , -13);
	        $idPostfix = (int)$idPost+1;

	        $nextId = STR_PAD((string)$idPostfix,4,"0",STR_PAD_LEFT).'/SPPN/EI/II/'.$years;
	    }
	    else{
	    	
	    	$nextId = '0001/SPPN/EI/II/'.$years;
	    
	    } // For the first time
	    return $nextId;
	
	}

	// public function GenerateNomorDokumen($field,$content) {
	// 	$years = date('Y');
	//     $query = $this->db->select($field)
	//                       ->from($this->_table_name)
	//                       ->get();
	//     $row = $query->last_row();
	    
	//     if($row){
	//         $idPost = substr($row->$field, 0 , 4);
	//         $idPostfix = (int)$idPost+1;
	//         $nextId = STR_PAD((string)$idPostfix,4,"0",STR_PAD_LEFT).$content.$years;

	//     }
	//     else{
	    	
	//     	$nextId = '0001'.$content.$years;
	    
	//     } // For row first time
	//     return $idPostfix;
	
	// }

	public function GenerateNomorDokumen( $field ,$id = NULL, $start = NULL, $size = NULL, $barang = FALSE)
	{
		$this->db->like($field, $id, 'before'); 

		$this->db->select_max($field);
		$id_new = $this->db->get($this->_table_name)->row();

		if($id_new){
			$arrName = array();
			foreach ($id_new as $key => $value) {
				$arrName[0] = $value;
			}
			$id_new = substr($arrName[0], $start, $size) + 1;
			if(!$barang){
				if(strlen($id_new) == 1){
					$id_new =  '0' . $id_new . $id;
				}else{
					$id_new = $id_new . $id ;
				}
			}else{
				if(strlen($id_new) == 1){
					$id_new = '0000' . $id_new . $id;
				}elseif(strlen($id_new) == 2){
					$id_new = '000' . $id_new . $id;
				}elseif(strlen($id_new) == 3){
					$id_new =  '00' . $id_new . $id;
				}elseif(strlen($id_new) == 4){
					$id_new =  '0' . $id_new . $id;
				}else{
					$id_new = $id_new . $id;
				}
			}
			return $id_new;
		}else{
			if(!$barang){
				return  "01" . $id;
			}else{
				return "00001" . $id;
			}
		}
	}

}

/* End of file ELTRAN_Model.php */
/* Location: ./application/core/ELTRAN_Model.php */