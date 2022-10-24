<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_m');
        $this->load->library('form_validation');

        is_logged_in();
    }

    public function index()
    {
        // $data['result1'] = $this->User_m->administrasi($id);
        // $data['id_adm'] = $id;
        // $id_adm = $data_adm['id'];        

        // $data['result'] = $this->User_m->apv_administrasi($id_admin);

        $id = $this->session->userdata('id');
        $data_adm = $this->User_m->user_index($id);
        $data['result'] = $data_adm;
        $id_adm = $data_adm['0']['id'];

        $data['title'] = 'Dashboard';
        $data['result'] = $this->User_m->dashboard($id_adm);
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/sidebar', $data);
        $this->load->view('user/templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/templates/footer', $data);
    }

    //HIGH PLACE WORK
    public function high_place_work()
    {
        // $ip = $this->input->ip_address();
        // print_r($ip);
        $id = $this->session->userdata('id');
        $data_adm = $this->User_m->administrasi($id);

        $data['result1'] = $data_adm;
        $id_adm = $data_adm[0]['id'];

        $data['id_adm'] = $id_adm;
        $data['result_pekerja'] = $this->User_m->tampil_pekerja($id_adm);
        $data['result_apd'] = $this->User_m->tampil_apd($id_adm);
        $data['result_pemantauan'] = $this->User_m->tampil_pemantauan($id_adm);
        $data['result_alat'] = $this->User_m->tampil_alat($id_adm);
        $data['result_sda'] = $this->User_m->tampil_sda($id_adm);
        $data['result_pengawasan'] = $this->User_m->tampil_pengawasan($id_adm);

        $data['dataLampiran'] = $this->User_m->lampiran($id_adm);

        $data['setstatus'] = $this->Lampiran_m->status_lampiran($id_adm);

        $data['title'] = 'Home';

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/sidebar', $data);
        $this->load->view('user/templates/topbar', $data);
        $this->load->view('user/ipk/high_place_work', $data);
        $this->load->view('user/templates/footer', $data);
    }

    public function hpw_c()
    {
        $data['title'] = 'Home';

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('user/ipk/v_hpw', $data);
    }
    //END HIGH PLACE WORK

    //HOT WORK
    public function hot_work()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('user/ipk/hot_work', $data);
    }
    public function hw_c()
    {
        $data['title'] = 'Home';

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('user/ipk/v_hw', $data);
    }
    //END HOT WORK

    //CONFINED SPACE
    public function confined_space()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('user/ipk/confined_space', $data);
    }
    public function cs_c()
    {
        $data['title'] = 'Home';

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('user/ipk/v_cs', $data);
    }
    //END CONFINED SPACE

    //GENERAL
    public function general()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('user/ipk/general', $data);
    }
    public function g_c()
    {
        $data['title'] = 'Home';

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('user/ipk/v_g', $data);
    }
    //END GENERAL

    public function pernyataan($id)
    {
        $data['id_adm'] = $id;

        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/sidebar', $data);
        $this->load->view('user/templates/topbar', $data);
        $this->load->view('user/lampiran/pernyataan', $data);
        $this->load->view('user/templates/footer', $data);
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
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/sidebar', $data);
        $this->load->view('user/templates/topbar', $data);
        $this->load->view('user/lampiran/catatan_pekerjaan', $data);
        $this->load->view('user/templates/footer', $data);
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

        // $id = $this->session->userdata('id');
        // $data_adm = $this->User_m->administrasi($id);

        // $data['result'] = $data_adm;
        // $id_adm = $data_adm[0]['id'];

        // uji coba yaa
        // $data = [
        //     // "adm_id" => $this->db->get('administrasi.id', true), //ini adalah tambahan 
        //     //"adm_id" => $id[0],

        //     // "adm_id" => $this->input->post(['adm_id'], true), 
        //     "urutan_proses" => $this->input->post('urutanProses', true),
        //     "potensi_bahaya" => $this->input->post('potensiBahaya', true),
        //     "k3l" => $this->input->post('jenis', true),
        //     "tindakan_pencegahan" => $this->input->post('tindakanPencegahan', true),
        //     "keterangan" => $this->input->post('keterangan', true)
        // ];

        //batas uji coba

        $this->User_m->inputData();
        redirect('user/jsa');
    }

    public function simpanDataAdm()
    {
        // $data['result'] = $this->db->get_where('administrasi', ['id' => $adm_id]);
        // $data_administrasi = $this->User_m->administrasi($adm_id);
        // $data['result'] = $adm_id;

        // print_r($adm_id);

        // $data['id_adm'] = $adm_id;
        // print_r($adm_id);

        $id = $this->session->userdata('id');
        $data_adm = $this->User_m->user_index($id);
        $data['result'] = $data_adm;
        $id_adm = $data_adm['0']['id'];

        $this->User_m->inputDataAdm($id_adm);
        redirect('user');
        // redirect('user/isi_pekerja');
    }
    public function simpanDataPekerja()
    {
        // $data['identifikasi_aspek'] = $this->User_m->getIdentifikasiAspekById($adm_id);
        $namap = $this->input->post('nama_pekerja[]', true);
        $trainingp = $this->input->post('training[]', true);
        $idp = $this->input->post('id_card', true);

        if (!empty($namap) && !empty($trainingp) && !empty($idp)) {
            foreach ($namap as $key => $value) { {
                    $data['nama_pekerja'] = $value;
                    $data['training'] = $trainingp[$key];
                    $data['id_card'] = $idp[$key];
                    $this->db->insert('nama_pekerja', $data);
                }
            }
        }

        $this->User_m->inputDataPekerja(); //woalah salah
        redirect('user/isi_apd');
    }
    public function simpanDataApd()
    {
        // $data['identifikasi_aspek'] = $this->User_m->getIdentifikasiAspekById($adm_id);

        // $formCount = count($_POST["nama_pekerja"]);

        // if ($formCount > 0) {
        //     for ($i = 0; $i < $formCount; $i++) {
        //         if (trim($_POST["nama_pekerja"][$i] != '')) {
        //             //code sql e 
        //             //coba tuliske ndisik, woke mas siap
        //             $data = [
        //                 // "adm_id" => $this->input->post('company', true),
        //                 "nama_pekerja" => $this->input->post('nama_pekerja', true),
        //                 "training" => $this->input->post('training', true),
        //                 "id_card" => $this->input->post('id_card', true)
        //             ];
        //             $this->db->insert('nama_pekerja', $data); //iki queryne mas, queru builder ok sik

        //         }
        //     }
        // }



        $this->User_m->inputDataApd(); //kenapa di deleh neng kene? wii salah nulis kui mas
        redirect('user/isi_alat');
    }
    public function simpanDataAlat()
    {
        // $data['identifikasi_aspek'] = $this->User_m->getIdentifikasiAspekById($adm_id);

        $this->User_m->inputDataAlat();
        redirect('user/isi_pemantauan');
    }
    public function simpanDataPemantauan()
    {
        // $data['identifikasi_aspek'] = $this->User_m->getIdentifikasiAspekById($adm_id);

        $this->User_m->inputDataPemantauan();
        redirect('user/isi_sda');
    }
    public function simpanDataSda()
    {
        // $data['identifikasi_aspek'] = $this->User_m->getIdentifikasiAspekById($adm_id);

        $this->User_m->inputDataSda();
        redirect('user/isi_pengawasan');
    }
    public function simpanDataPengawasan($id_adm)
    {
        // $data['identifikasi_aspek'] = $this->User_m->getIdentifikasiAspekById($adm_id);

        $this->User_m->inputDataPengawasan();
        redirect('user/detail' . $id_adm);
    }

    public function simpanDataIPK()
    {
        // $data['identifikasi_aspek'] = $this->User_m->getIdentifikasiAspekById($adm_id);

        $this->User_m->inputData_ipk();
        redirect('user');
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

    public function upload_file($id)
    {


        $data['id_adm'] = $id;

        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['lisensi_file'] = $this->db->get('tt_attach')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/sidebar', $data);
        $this->load->view('user/templates/topbar', $data);
        $this->load->view('user/lampiran/upload_file', $data);
        $this->load->view('user/templates/footer', $data);
    }

    public function upload()
    {
        $config['upload_path']          = './assets/img/lisensi/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        // $config['max_size']             = 1000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 1000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('lisensi_file')) {
            echo 'Gagal tambah data';
        } else {
            // $data = array('upload_data' => $this->upload->data());

            // $this->load->view('upload_file', $data);

            $lisensi_file = $this->upload->data();
            $lisensi_file = $lisensi_file['file_name'];

            $data = array(
                'lisensi_file' => $lisensi_file,
            );

            $this->db->insert('tt_attach', $data);

            $this->session->set_flashdata('pesan', '<div calss="alert alert-success" role="alert">Lisensi Berhasil Di upload!</div>');
            redirect('user/upload_file');
        }
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

        // $id = $this->session->userdata('id');
        // $data_adm = $this->User_m->administrasi($id);

        // $data['result'] = $data_adm;
        // $id_adm = $data_adm[0]['id'];

        // $data['identifikasi_aspek'] = $this->user_m->identifikasi_aspek($id_adm);

        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/sidebar', $data);
        $this->load->view('user/templates/topbar', $data);
        $this->load->view('user/lampiran/identifikasi_aspek', $data);
        $this->load->view('user/templates/footer', $data);
    }

    public function check_list()
    {
        $data['result'] = $this->User_m->SemuaData();

        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/sidebar', $data);
        $this->load->view('user/templates/topbar', $data);
        $this->load->view('user/lampiran/check_list', $data);
        $this->load->view('user/templates/footer', $data);
    }

    public function SimpanCheckList()
    {
        $this->User_m->InputDataCheckList();
        redirect('user/isi_pekerja');
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
        $id_user = $this->session->userdata('id');
        // $data_adm = 
        $this->User_m->user_index($id_user);
        // $data['result'] = $data_adm;
        // $id_adm = $data_adm['0']['id'];

        // print_r($id_user);

        //test sesuai dengan jenis_ipk
        // $jenis_pekerjaan = $this->input->post('jenis_pekerjaan');
        // $administrasi = $this->db->get_where('administrasi', ['jenis_pekerjaan' => $jenis_pekerjaan])->row_array();

        // $id = $this->session->userdata('id');
        // $data_adm = $this->User_m->administrasi($id);

        // $sql = "SELECT * FROM administrasi WHERE id='$id'";
        // $query = $this->db->query($sql);
        // $data = $query->row_array();

        $data['result1'] = $this->User_m->administrasi($id);
        $data['id_adm'] = $id;
        // $id_adm = $data_adm['id'];

        $data['result_pekerja'] = $this->User_m->tampil_pekerja($id);
        $data['result_apd'] = $this->User_m->tampil_apd($id);
        $data['result_pemantauan'] = $this->User_m->tampil_pemantauan($id);
        $data['result_alat'] = $this->User_m->tampil_alat($id);
        $data['result_sda'] = $this->User_m->tampil_sda($id);
        $data['result_pengawasan'] = $this->User_m->tampil_pengawasan($id);
        // $data['identifikasi_aspek'] = $this->User_m->tampil_identifikasi_aspek($id);

        //lalmpiran adm
        $data['attachment'] = $this->User_m->tampil_attach($id);
        $data['attachment'] = $this->User_m->tampil_attach($id);
        $data['attachment'] = $this->User_m->tampil_attach($id);
        $data['attachment'] = $this->User_m->tampil_attach($id);
        $data['attachment'] = $this->User_m->tampil_attach($id);

        $data['result'] = $this->User_m->attachment_apv($id);

        $data['title'] = 'Home';

        //if hpw
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/sidebar', $data);
        $this->load->view('user/templates/topbar', $data);
        $this->load->view('user/ipk/high_place_work', $data);
        $this->load->view('user/templates/footer', $data);

        //test sesuai dengan ipk 1=hpw, 2=hw, 3=
        // if ($administrasi['jenis_pekerjaan'] == 1) {
        //     $data['user'] = $this->db->get_where('user', ['email' =>
        //     $this->session->userdata('email')])->row_array();
        //     $this->load->view('templates/header', $data);
        //     $this->load->view('user/ipk/high_place_work', $data);
        // }

        // $data['user'] = $this->db->get_where('user', ['email' =>
        // $this->session->userdata('email')])->row_array();
        // $this->load->view('templates/header', $data);

        // $data['identifikasi_aspek'] = $this->User_m->getUserById($id);
        // $this->load->view('user/ipk/high_place_work', $data);
    }

    //test//test//test
    public function isi_adm()
    {
        $data['title'] = 'Form Administrasi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/sidebar', $data);
        $this->load->view('user/templates/topbar', $data);
        $this->load->view('user/form/adm_form', $data);
        $this->load->view('user/templates/footer', $data);
    }

    public function isi_pekerja($id)
    {
        $data['result'] = $this->User_m->dashboard();
        // $data['id'] = $id;

        $data['result'] = $this->User_m->administrasi($id);
        $data['id_adm'] = $id;
        print_r($id);

        $data['title'] = 'Form Pekerja';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/sidebar', $data);
        $this->load->view('user/templates/topbar', $data);
        $this->load->view('user/form/pekerja_form', $data);
        $this->load->view('user/templates/footer', $data);
    }

    public function isi_alat()
    {
        $data['title'] = 'Form Alat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/sidebar', $data);
        $this->load->view('user/templates/topbar', $data);
        $this->load->view('user/form/alat_form', $data);
        $this->load->view('user/templates/footer', $data);
    }

    public function isi_apd()
    {
        $data['title'] = 'Form APD';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/sidebar', $data);
        $this->load->view('user/templates/topbar', $data);
        $this->load->view('user/form/apd_form', $data);
        $this->load->view('user/templates/footer', $data);
    }

    public function isi_pemantauan()
    {
        $data['title'] = 'Form Pemantauan Alat';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/sidebar', $data);
        $this->load->view('user/templates/topbar', $data);
        $this->load->view('user/form/pemantauan_form', $data);
        $this->load->view('user/templates/footer', $data);
    }

    public function isi_sda()
    {
        $data['title'] = 'Form Sumber Daya';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/sidebar', $data);
        $this->load->view('user/templates/topbar', $data);
        $this->load->view('user/form/sda_form', $data);
        $this->load->view('user/templates/footer', $data);
    }

    public function isi_pengawasan()
    {
        $data['title'] = 'Form Pengawasan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/sidebar', $data);
        $this->load->view('user/templates/topbar', $data);
        $this->load->view('user/form/pengawasan_form', $data);
        $this->load->view('user/templates/footer', $data);
    }


    //approve kontraktor

    public function aproveKontraktor($id_adm)
    {
        // $administrasi = $this->db->get_where('administrasi', ['nama_apv_kontraktor' => $id_adm])->row_array();
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
        } else {
            //validasinya success
            $this->_approve($id_adm);
        }
    }

    private function _approve($id_adm)
    {
        $email = $this->input->post('email'); //ini nantinya diganti menjadi username
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //jika user ada
        if ($user) {
            //cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];

                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                    // $this->setaproval_kontraktor();
                    print_r('lu admin, bukan kkontraktor');
                } elseif ($user['role_id'] == 2) {
                    print_r('lu p2k3l, bukan kkontraktor');
                    // $this->setaproval_kontraktor();
                } elseif ($user['role_id'] == 3) {
                    print_r('lu gm, bukan kkontraktor');
                    // $this->setaproval_kontraktor();
                } elseif ($user['role_id'] == 4) {
                    $this->setaproval_kontraktor($id_adm);
                } elseif ($user['role_id'] == 5) {
                    print_r('lu gmr user, bukan kkontraktor');
                    // $this->setaproval_kontraktor();
                } else {
                    print_r('lu mgr area, bukan kkontraktor');
                    // $this->setaproval_kontraktor();
                }
            } else {
                print_r('salahpassowrd');
            }
        } else {
            print_r('ndakadauser');
        }
    }

    function setaproval_kontraktor($id_adm)
    {
        // $where = array('id' => $id);

        // $id = $this->session->userdata('id');
        // $data_adm = $this->User_m->administrasi($id);

        // $data['result1'] = $data_adm;
        // $id_adm = $data_adm[0]['id'];
        // $aortadb = $this->load->database("sim_a", TRUE);
        // $query = $aortadb->query("UPDATE administrasi set apv_kontraktor = 1");

        // $id = $this->session->userdata('id');
        // $data_adm = $this->User_m->administrasi($id);
        // $data['result1'] = $data_adm;
        // $id_adm = $data_adm[0]['id'];

        $ip = $this->input->ip_address();


        $data = array(
            'apv_kontraktor' => '1',
            'ip_apv_kontraktor' => $ip,
            'date_apv_kontraktor' => time()
        );
        // $this->db->set('apv_kontraktor = 1');

        $this->db->update('administrasi', $data, array('id' => $id_adm));

        redirect('user/detail/' . $id_adm);
    }

    //aprove kontraktor pernyataan lk3

    public function aproveKontraktorLk3($id_adm)
    {
        // $administrasi = $this->db->get_where('administrasi', ['nama_apv_kontraktor' => $id_adm])->row_array();
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
        } else {
            //validasinya success
            $this->_approvelk3($id_adm);
        }
    }

    private function _approvelk3($id_adm)
    {
        $email = $this->input->post('email'); //ini nantinya diganti menjadi username
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //jika user ada
        if ($user) {
            //cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];

                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                    // $this->setaproval_kontraktor();
                    print_r('lu admin, bukan kkontraktor');
                } elseif ($user['role_id'] == 2) {
                    print_r('lu p2k3l, bukan kkontraktor');
                    // $this->setaproval_kontraktor();
                } elseif ($user['role_id'] == 3) {
                    print_r('lu gm, bukan kkontraktor');
                    // $this->setaproval_kontraktor();
                } elseif ($user['role_id'] == 4) {
                    $this->setaproval_kontraktor_lk3($id_adm);
                } elseif ($user['role_id'] == 5) {
                    print_r('lu gmr user, bukan kkontraktor');
                    // $this->setaproval_kontraktor();
                } else {
                    print_r('lu mgr area, bukan kkontraktor');
                    // $this->setaproval_kontraktor();
                }
            } else {
                print_r('salahpassowrd');
            }
        } else {
            print_r('ndakadauser');
        }
    }

    function setaproval_kontraktor_lk3($id_adm)
    {
        $ip = $this->input->ip_address();

        $data = array(
            'apv_kontraktor_lk3' => '1',
            'ip_apv_kontraktor_lk3' => $ip,
            'date_apv_kontraktor_lk3' => time()
        );
        // $this->db->set('apv_kontraktor = 1');

        $this->db->update('administrasi', $data, array('id' => $id_adm));

        redirect('user/detail/' . $id_adm);
    }
}
