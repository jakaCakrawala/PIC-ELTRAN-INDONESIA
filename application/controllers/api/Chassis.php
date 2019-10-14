<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Chassis extends CI_Controller {


	use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

    public function __construct()
    {
    	parent::__construct();
    	$this->__resTraitConstruct();
        $this->load->model('Chassis_m');
        $this->load->model('Content_m');
        $this->load->model('Content_history_m');
        $this->load->model('Gps_m');
        $this->load->model('Gps_history_m');
        $this->load->library('session');

    }

<<<<<<< HEAD
	 public function chassis_get($id)
=======
	public function chassis_get($id)
>>>>>>> 2fab5183c66cdd1e494a224db89964e8f4e12179
    {

       $query =  'SELECT  chassis.assets_id_chassis,chassis.code_train,chassis.code_carriage,
                  content.train_name,content.origin,content.destinantion,content.announcement,content.tag_rear,content.tag_front
                  FROM chassis
                  JOIN content  ON chassis.assets_id_chassis = content.assets_id_chassis
                  WHERE chassis.assets_id_chassis = "'.$id.'"'; 
       $getData = $this->Chassis_m->get_by_query($query);

       $this->response(
        array( "result" => $getData, 200)
       );

       if (!empty($getData))
        {
            $this->set_response($getData, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
        else
        {
            $this->set_response([
                    'status' => FALSE,
                    'message' => 'User could not be found'
            ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
        

    }
<<<<<<< HEAD

    public function postChassis_post()
    {
        // $this->some_model->update_user( ... );
        $assets = array(
                    'assets_id_chassis'  => $this->post('assets_id_chassis'),
                ); 

        $assets['create_date']   = date('Y-m-d H:i:s');
        $assets['create_by']     = "automatic";

        $insert = $this->Chassis_m->save($assets,null);

        if ($insert) {
            $this->response(
              array( "result" => "Success", 200)
            );
        } else {
            $this->response(array('status' => 'fail', 502));
        }

        // $this->set_response($message, 201); // CREATED (201) being the HTTP response code
    }
    
=======
>>>>>>> 2fab5183c66cdd1e494a224db89964e8f4e12179
}

/* End of file Chassis.php */
/* Location: ./application/controllers/api/Chassis.php */