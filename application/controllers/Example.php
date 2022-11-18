<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Curl\Curl;
class Example extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

	public function index(){
		$curl = new Curl();
        $curl->get('https://jsonplaceholder.typicode.com/todos/1');

        if ($curl->error) {
            echo json_encode(array(
                'status' => false,
                'message' => $curl->errorMessage
            ));
        } else {
            echo json_encode(array(
                'status' => true,
                'data' => $curl->response
            ));
        }
	}
}
