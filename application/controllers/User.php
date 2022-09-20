<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_m');

        is_logged_in();
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
        $this->load->view('user/index', $data);
        // $this->load->view('templates/footer');
    }

    public function high_place_work()
    {
        $id = $this->session->userdata('id');
        $data_adm = $this->User_m->administrasi($id);

        $data['result1'] = $data_adm;
        $id_adm = $data_adm[0]['id'];


        $data['result_pekerja'] = $this->User_m->tampil_pekerja($id_adm);
        $data['result_apd'] = $this->User_m->tampil_apd($id_adm);
        $data['result_pemantauan'] = $this->User_m->tampil_pemantauan($id_adm);
        $data['result_alat'] = $this->User_m->tampil_alat($id_adm);
        $data['result_sda'] = $this->User_m->tampil_sda($id_adm);
        $data['result_pengawasan'] = $this->User_m->tampil_pengawasan($id_adm);



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
        $data['result'] = $this->User_m->SemuaData();
        // $this->load->view('user/identifikasi_aspek', $data);

        // log_message('id', $data['identifikasi_aspek']);
        // $data['title'] = 'Home';
        // $data['identifikasi_aspek'] = $this->User_m->SemuaData();
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

    public function form_wizard()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('user/form_wizard_all', $data);
        // $this->load->view('templates/footer');
    }

    public function form_jsa()
    {

        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('user/form_jsa', $data);
        // $this->load->view('templates/footer');        
    }

    public function simpanData()
    {
        $this->User_m->inputData();
        redirect('user/jsa');
    }

    public function form_jsa_edit($id)
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);

        $data['identifikasi_aspek'] = $this->User_m->getUserById($id);
        $this->load->view('user/form_jsa_edit', $data);
    }

    public function form_jsa_hapus($id)
    {
        $this->User_m->hapusData($id);
        redirect('user/jsa');
    }

    public function ubahData()
    {
        $this->User_m->updateData();
        redirect('user/jsa');
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

    public function form_wizard2()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('user/form_wizard2', $data);
        // $this->load->view('templates/footer');
    }

    public function form_multistep()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('user/form_wizard_allinone', $data);
        // $this->load->view('templates/footer');
    }

    public function test_modal()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('user/form_modal_wizard', $data);
        // $this->load->view('templates/footer');
    }

    public function jsa()
    {
        $data['result'] = $this->User_m->SemuaData();

        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('user/lampiran/identifikasi_aspek', $data);
        // $this->load->view('templates/footer');
    }

    public function check_list()
    {
        $data['result'] = $this->User_m->SemuaData();

        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('user/lampiran/check_list', $data);
        // $this->load->view('templates/footer');
    }

    // add or remove input
    public function store()
    {
        if (!empty($this->input->post('submit'))) {
            echo "<pre>";
            print_r($_POST);
        }
    }

    public function detail($id)
    {
        $id = $this->session->userdata('id');
        $data_adm = $this->User_m->administrasi($id);

        $data['result1'] = $data_adm;
        $id_adm = $data_adm[0]['id'];

        $data['result_pekerja'] = $this->User_m->tampil_pekerja($id_adm);
        $data['result_apd'] = $this->User_m->tampil_apd($id_adm);
        $data['result_pemantauan'] = $this->User_m->tampil_pemantauan($id_adm);
        $data['result_alat'] = $this->User_m->tampil_alat($id_adm);
        $data['result_sda'] = $this->User_m->tampil_sda($id_adm);
        $data['result_pengawasan'] = $this->User_m->tampil_pengawasan($id_adm);

        $data['title'] = 'Home';

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('user/ipk/high_place_work', $data);



        // $data['user'] = $this->db->get_where('user', ['email' =>
        // $this->session->userdata('email')])->row_array();
        // $this->load->view('templates/header', $data);

        // $data['identifikasi_aspek'] = $this->User_m->getUserById($id);
        // $this->load->view('user/ipk/high_place_work', $data);
    }
}
