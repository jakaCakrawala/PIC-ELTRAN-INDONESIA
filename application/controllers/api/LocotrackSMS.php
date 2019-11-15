<?php 
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
// data Loco track
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class LocotrackSMS extends CI_Controller {

    use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

    public function __construct()
    {
    	parent::__construct();
    	$this->__resTraitConstruct();
        $this->load->model('Locotrackhealty_m');
        $this->load->model('Locotracklocomotives_m');
        $this->load->model('Locotrack_sms_m');

    }

    public function output_get()
    {

        $data = array();
        
        if($this->get('subtopik') == "publishList"){
            //Kondisi
            $whereRekap = " subtopik = '".$this->get('subtopik')."'";
            $selectRekap = "subtopik,status,idloc,datetime,A,C,D,E,F,G,H,J,GP,EN,SQ";
            // Get Rekap Data
            $data  = $this->Locotrack_sms_m->get_select_where_order($selectRekap,$whereRekap); 

        }elseif($this->get('subtopik') == "listIdloc"){
                        //Kondisi
            $whereRekap = " subtopik = '".$this->get('subtopik')."' AND idloc = '".$this->get('idloc')."'";
            $selectRekap = "subtopik,status,idloc,datetime,A,C,D,E,F,G,H,J,GP,EN,SQ";
            // Get Rekap Data
            $data  = $this->Locotrack_sms_m->get_select_where_order($selectRekap,$whereRekap); 

        }elseif($this->get('subtopik') == "publishApn"){
                        //Kondisi
            $whereRekap = " subtopik = '".$this->get('subtopik')."' AND apn = '".$this->get('apn')."'";
            $selectRekap = "subtopik,status,idloc,datetime,apn";
            // Get Rekap Data
            $data  = $this->Locotrack_sms_m->get_select_where_order($selectRekap,$whereRekap); 

        }elseif($this->get('subtopik') == "apnIdloc"){
                        //Kondisi
            $whereRekap = " subtopik = '".$this->get('subtopik')."' AND apn = '".$this->get('apn')."' AND idloc = '".$this->get('idloc')."'";
            $selectRekap = "subtopik,status,idloc,datetime,apn";
            // Get Rekap Data
            $data  = $this->Locotrack_sms_m->get_select_where_order($selectRekap,$whereRekap);

        }elseif($this->get('subtopik')  == "publishGateway"){
                        //Kondisi
            $whereRekap = " subtopik = '".$this->get('subtopik')."' AND nogsm = '".$this->get('nogsm')."'";
            $selectRekap = "subtopik,status,idloc,datetime,nogsm";
            // Get Rekap Data
            $data  = $this->Locotrack_sms_m->get_select_where_order($selectRekap,$whereRekap); 
        
        }elseif($this->get('subtopik')  == "gatewayIdloc"){
                        //Kondisi
            $whereRekap = " subtopik = '".$this->get('subtopik')."' AND nogsm = '".$this->get('nogsm')."' AND idloc ='".$this->get('idloc')."'";
            $selectRekap = "subtopik,status,idloc,datetime,nogsm";
            // Get Rekap Data
            $data  = $this->Locotrack_sms_m->get_select_where_order($selectRekap,$whereRekap); 

        }elseif($this->get('subtopik')  == "publishIntervalRunning"){
                        //Kondisi
            $whereRekap = " subtopik = '".$this->get('subtopik')."' AND interval = ".$this->get('interval')."";
            $selectRekap = "subtopik,status,idloc,datetime,interval";
            // Get Rekap Data
            $data  = $this->Locotrack_sms_m->get_select_where_order($selectRekap,$whereRekap); 

        }elseif($this->get('subtopik')  == "intervalRunningIdloc"){
                        //Kondisi
            $whereRekap = " subtopik = '".$this->get('subtopik')."' AND interval = '".$this->get('interval')."' AND idloc = '".$this->get('idloc')."'";
            $selectRekap = "subtopik,status,idloc,datetime,interval";
            // Get Rekap Data
            $data  = $this->Locotrack_sms_m->get_select_where_order($selectRekap,$whereRekap); 
        
        }elseif($this->get('subtopik')  == "publishIntervalIdle"){
                        //Kondisi
            $whereRekap = " subtopik = '".$this->get('subtopik')."' AND interval = '".$this->get('interval')."'";
            $selectRekap = "subtopik,status,idloc,datetime,interval";
            // Get Rekap Data
            $data  = $this->Locotrack_sms_m->get_select_where_order($selectRekap,$whereRekap); 

        }elseif($this->get('subtopik')  == "intervalIdleIdloc"){
                        //Kondisi
            $whereRekap = " subtopik = '".$this->get('subtopik')."' AND interval = '".$this->get('interval')."' AND idloc = '".$this->get('idloc')."'";
            $selectRekap = "subtopik,status,idloc,datetime,interval";
            // Get Rekap Data
            $data  = $this->Locotrack_sms_m->get_select_where_order($selectRekap,$whereRekap); 

        }elseif($this->get('subtopik')  == "restartIdlo"){
                        //Kondisi
            $whereRekap = " subtopik = '".$this->get('subtopik')."' AND interval = '".$this->get('interval')."' AND idloc = '".$this->get('idloc')."'";
            $selectRekap = "subtopik,status,idloc,datetime";
            // Get Rekap Data
            $data  = $this->Locotrack_sms_m->get_select_where_order($selectRekap,$whereRekap); 

        }elseif($this->get('subtopik')  == "publishIp"){
                        //Kondisi
            $whereRekap = " subtopik = '".$this->get('subtopik')."' AND ip = '".$this->get('ip')."' AND port = '".$this->get('port')."' AND user ='".$this->get('user')."' AND pass ='".$this->get('pass')."'";
            $selectRekap = "subtopik,status,idloc,datetime,ip,port,user,pass";
            // Get Rekap Data
            $data  = $this->Locotrack_sms_m->get_select_where_order($selectRekap,$whereRekap); 

        }elseif($this->get('subtopik')  == "ipIdloc"){
                        //Kondisi
            $whereRekap = " subtopik = '".$this->get('subtopik')."' AND ip = '".$this->get('ip')."' AND port = '".$this->get('port')."' AND user ='".$this->get('user')."' AND pass ='".$this->get('pass')."' AND idloc = '".$this->get('idloc')."'";
            $selectRekap = "subtopik,status,idloc,datetime,ip,port,user,pass";
            // Get Rekap Data
            $data  = $this->Locotrack_sms_m->get_select_where_order($selectRekap,$whereRekap); 

        }
        
       


    	$this->response(array( "result" => $data, 200));

       	if (!empty($data)){

            $this->set_response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
        }
        else
        {
            $this->set_response([
                    'status' => FALSE,
                    'message' => 'data not be found'
            ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
        
    }
}

/* End of file Locotrack.php */
 ?>