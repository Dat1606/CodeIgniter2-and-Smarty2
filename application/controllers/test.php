
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Test extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('usermodel');
	}
 
	public function loop() {
				
		$data = [
			'numbers' => array(1,2,3),
			'users' => $this->usermodel->list_user(),
		];

    	$this->smarty->view('loop.tpl',$data);
	}

	
}
 