<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('template');
    }

	public function index() {
        
        
        $this->template->render_dashboard('auth/auth', [], 'Teste');
    }
    
}
