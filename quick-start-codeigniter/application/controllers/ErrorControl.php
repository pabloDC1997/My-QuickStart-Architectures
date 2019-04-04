<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ErrorControl extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('template');
    }

	public function page404() {
        $this->template->render_auth('errors/html/error_404', [], 'Erro 404');
    }
    
}
