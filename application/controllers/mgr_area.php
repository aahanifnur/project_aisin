<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mgr_area extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mgrarea_m');
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['result'] = $this->Mgrarea_m->dashboard();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('mgr_area/templates/header', $data);
        $this->load->view('mgr_area/templates/sidebar', $data);
        $this->load->view('mgr_area/templates/topbar', $data);
        $this->load->view('mgr_area/index', $data);
        $this->load->view('mgr_area/templates/footer', $data);
    }

    public function detail($id)
    {
        $data['result1'] = $this->Mgrarea_m->administrasi($id);
        $data['id_adm'] = $id;

        $data['result_pekerja'] = $this->Mgrarea_m->tampil_pekerja($id);
        $data['result_apd'] = $this->Mgrarea_m->tampil_apd($id);
        $data['result_pemantauan'] = $this->Mgrarea_m->tampil_pemantauan($id);
        $data['result_alat'] = $this->Mgrarea_m->tampil_alat($id);
        $data['result_sda'] = $this->Mgrarea_m->tampil_sda($id);
        $data['result_pengawasan'] = $this->Mgrarea_m->tampil_pengawasan($id);
        $data['identifikasi_aspek'] = $this->Mgrarea_m->tampil_identifikasi_aspek($id);

        $data['title'] = 'Izin Pekerjaan Khusus';

        //If High Work Work
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('mgr_area/templates/header', $data);
        $this->load->view('mgr_area/templates/sidebar', $data);
        $this->load->view('mgr_area/templates/topbar', $data);
        $this->load->view('mgr_area/ipk/high_place_work', $data);
        $this->load->view('mgr_area/templates/footer', $data);
    }

    //approve safety
    public function aproveMgrarea($id_adm)
    {

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
                    // $this->setaproval_safety($id_adm);
                } elseif ($user['role_id'] == 2) {
                    print_r('lu p2k3l, bukan kkontraktor');
                    // $this->setaproval_kontraktor();
                } elseif ($user['role_id'] == 3) {
                    print_r('lu gm, bukan kkontraktor');
                    // $this->setaproval_kontraktor();
                } elseif ($user['role_id'] == 4) {
                    print_r('lu gm, bukan kkontraktor');
                    // $this->setaproval_kontraktor($id_adm);
                } elseif ($user['role_id'] == 5) {
                    // $this->setaproval_mgrarea($id_adm);
                    print_r('lu gmr user, bukan kkontraktor');
                    // $this->setaproval_kontraktor();
                } else {
                    $this->setaproval_mgrarea($id_adm);
                    // print_r('lu mgr area, bukan kkontraktor');
                    // $this->setaproval_kontraktor();
                }
            } else {
                print_r('salahpassowrd');
            }
        } else {
            print_r('ndakadauser');
        }
    }

    function setaproval_mgrarea($id_adm)
    {

        $ip = $this->input->ip_address();


        $data = array(
            'apv_mgrarea' => '1',
            'ip_apv_mgrarea' => $ip,
            'date_apv_mgrarea' => time()
        );

        $this->db->update('administrasi', $data, array('id' => $id_adm));

        redirect('mgr_area/detail/' . $id_adm);
    }
}
