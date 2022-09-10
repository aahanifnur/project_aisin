<?php
defined('BASEPATH') or exit('No direct script access allowed');

class gm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        echo ('ini adalah halaman gm');
    }
}
