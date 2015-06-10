<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


require APPPATH . 'libraries/REST_Controller.php';

class restController extends REST_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	
	public function student_get()
	{
		$tlb = $this->load->model('Student');
		$data = array('returned: '. $tlb);
		
		$this->response($data);
		
	}
	public function student_post() 
	{
		$tlb = $this->load->model('Student');
		$randomNames = ["Joe", "Mary", "Dave", "Diana", "Ben", "Jenna"];
		$randomPw = ["awgrawrg","ju6ydthr","ke6tjyh","q3y5aegrdf","35wksgf","qazetdbf"];
		$user = randomNames(rand(0,count($randomNames)));
		$pw = randomPw(rand(0,count($randomPw)));
		if ($tlb->add_student($user,$pw))
			$this->response(array('Success: true'));
		else
			$this->response(array('success: false'));

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */