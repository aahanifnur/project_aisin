<?php
defined('BASEPATH') or exit('No direct script access allowed');

class p2k3l extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Home';
        $data['result'] = $this->User_m->dashboard();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // $data['data'] = $this->db->get('sim-a')->result();
        // $data['content'] = 'user/index';
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('p2k3l/index', $data);
        // $this->load->view('templates/footer');
    }
}
