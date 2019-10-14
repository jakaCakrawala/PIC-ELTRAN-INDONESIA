<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
// data Loco track
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
class Locotrack extends CI_Controller {

	use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

    public function __construct()
    {
    	parent::__construct();
    	$this->__resTraitConstruct();
        $this->load->model('Locotrackhealty_m');
        $this->load->model('Locotracklocomotives_m');

    }
    //Metho Get
    public function locotrackall_get()
    {
    	$getData = $this->Locotracklocomotives_m->get();

    	$this->response(array( "result" => $getData, 200));

       	if (!empty($getData)){

            $this->set_response($getData, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
        }
        else
        {
            $this->set_response([
                    'status' => FALSE,
                    'message' => 'data not be found'
            ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
        
    }
    public function locotrackall_gethealty_get()
    {
    	$getData = $this->Locotrackhealty_m->get();

    	$this->response(array( "result" => $getData, 200));

       	if (!empty($getData)){

            $this->set_response($getData, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
        }
        else
        {
            $this->set_response([
                    'status' => FALSE,
                    'message' => 'data not be found'
            ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
        
    }

    public function locotrackby_get($id)
    {
    	$getData = $this->Locotracklocomotives_m->get_by(array('L_VTDID'=> $id));

    	$this->response(array( "result" => $getData, 200));

       	if (!empty($getData)){

            $this->set_response($getData, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
        }
        else
        {
            $this->set_response([
                    'status' => FALSE,
                    'message' => 'data not be found'
            ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
        
    }

    public function locotrackallhealtyby_get($id)
    {
    	$getData = $this->Locotrackhealty_m->get_by(array('Locoid'=>$id));

    	$this->response(array( "result" => $getData, 200));

       	if (!empty($getData)){

            $this->set_response($getData, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
        }
        else
        {
            $this->set_response([
                    'status' => FALSE,
                    'message' => 'data not be found'
            ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
        
    }

    // METHOD Post
	public function locotrackLocomotive_post()
    {
        // $this->some_model->update_user( ... );
        $assets = array(
                    'L_DATATYPE'  => $this->post('L_DATATYPE'),
                    'L_VTDID' 	  => $this->post('L_VTDID'),
                    'L_LON' 	  => $this->post('L_LON'),
                    'L_LAT'  	  => $this->post('L_LAT'),
                    'L_SPEED' 	  => $this->post('L_SPEED'),
                    'L_HEADING'   => $this->post('L_HEADING'),
                    'L_ENGINE'    => $this->post('L_ENGINE'),
                ); 

        $assets['L_DATETIME']   = date('Y-m-d H:i:s');

        $insert = $this->Locotracklocomotives_m->save($assets,null);

        if ($insert) {
            $this->response(
              array( "result" => "Success", 200)
            );
        } else {
            $this->response(array('status' => 'fail', 502));
        }

        // $this->set_response($message, 201); // CREATED (201) being the HTTP response code
    }

    public function locotrackhealty_post()
    {
        // $this->some_model->update_user( ... );
        $assets = array(
                    'Locoid'  => $this->post('Locoid'),
                    'Firm' 	  => $this->post('Firm'),
                    'Rtc' 	  => $this->post('Rtc'),
                    'Ymd'  	  => $this->post('Ymd'),
                    'Lat'   => $this->post('Lat'),
                    'Long'    => $this->post('Long'),
                    'Gps'    => $this->post('Gps'),
                    'Satellite'    => $this->post('Satellite'),
                    'Conn'    => $this->post('Conn'),
                    'Cpin'    => $this->post('Cpin'),
                    'Csq'    => $this->post('Csq'),
                    'Creg'    => $this->post('Creg'),
                    'Network'    => $this->post('Network'),
                    'Sd'    => $this->post('Sd'),
                    'temp'    => $this->post('temp'),
                    'apn'    => $this->post('apn'),
                    'intervalrun'    => $this->post('intervalrun'),
                ); 

        $assets['Hms']   = date('Y-m-d H:i:s');

        $insert = $this->Locotrackhealty_m->save($assets,null);

        if ($insert) {
            $this->response(
              array( "result" => "Success", 200)
            );
        } else {
            $this->response(array('status' => 'fail', 502));
        }

        // $this->set_response($message, 201); // CREATED (201) being the HTTP response code
    }

}

/* End of file locotrack.php */
/* Location: ./application/controllers/api/locotrack.php */