<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {
    //ci instance
    private $CI;
    //template Data
    var $template_data = array();

    public function __construct() {
        $this->CI =& get_instance();

        $this->CI->config->load('app');
        $this->app_name = $this->CI->config->item('app_name') ?? 'Gestor Bulla Web';
        $this->app_name .= ' - ';

        $this->app_version = $this->CI->config->item('app_name') ?? '0.0.0';
    }

    public function render_auth($view, $dataView = null, $pageTitle = null){
        $pageTitle = $pageTitle ?? 'Auth Page';
        $dataHeader = [ 'page_title' =>  $this->app_name.$pageTitle ];

        $this->CI->load->view('template/auth/header', $dataHeader);
        $this->CI->load->view($view, $dataView);
        $this->CI->load->view('template/auth/footer');
    }

    public function render_dashboard($view, $dataView = null, $pageTitle = null){
        $pageTitle = $pageTitle ?? 'Dashboard';
        $dataHeader = [ 'page_title' =>  $this->app_name.$pageTitle ];

        $this->CI->load->view('template/dashboard/header', $dataHeader);
        $this->CI->load->view($view, $dataView);
        $this->CI->load->view('template/dashboard/footer');

    }           
}