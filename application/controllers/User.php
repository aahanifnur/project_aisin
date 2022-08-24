<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // $data['data'] = $this->db->get('sim-a')->result();
        // $data['content'] = 'user/index';
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        // $this->load->view('templates/footer');
    }

    public function high_place_work()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('user/ipk/high_place_work', $data);
    }

    // public function hpw()
    // {
    //     $data['title'] = 'Home';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('user/ipk/hpw', $data);
    //     $this->load->view('templates/footer');
    // }

    public function hot_work()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('user/ipk/hot_work', $data);
    }

    public function confined_space()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('user/ipk/confined_space', $data);
    }

    public function general()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('user/ipk/general', $data);
    }

    public function pernyataan()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('user/lampiran/pernyataan', $data);
        // $this->load->view('templates/footer');
    }

    public function check_list_aktivitas()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/check_list_aktivitas', $data);
        $this->load->view('templates/footer');
    }

    public function identifikasi_aspek()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/identifikasi_aspek', $data);
        $this->load->view('templates/footer');
    }

    public function catatan_pekerjaan_khusus()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('user/lampiran/catatan_pekerjaan', $data);
        // $this->load->view('templates/footer');
    }

    public function form_adm()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('user/form_adm', $data);
        // $this->load->view('templates/footer');
    }

    public function form()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('user/form', $data);
        // $this->load->view('templates/footer');
    }

    public function upload_file()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('user/upload_file', $data);
        // $this->load->view('templates/footer');
    }
}
