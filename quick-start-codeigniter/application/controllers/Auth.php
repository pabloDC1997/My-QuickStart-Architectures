<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('template');
    }

	public function index() {
        

        
		$this->template->render_auth('auth/auth', [], 'Teste');
    }
    
}
