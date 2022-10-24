<?php
defined('BASEPATH') or exit('No direct script access allowed');

class p2k3l extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('P2k3l_m');
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['result'] = $this->P2k3l_m->dashboard();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('p2k3l/templates/header', $data);
        $this->load->view('p2k3l/templates/sidebar', $data);
        $this->load->view('p2k3l/templates/topbar', $data);
        $this->load->view('p2k3l/index', $data);
        $this->load->view('p2k3l/templates/footer', $data);
    }

    public function detail($id)
    {
        $data['result1'] = $this->P2k3l_m->administrasi($id);
        $data['id_adm'] = $id;

        $data['result_pekerja'] = $this->P2k3l_m->tampil_pekerja($id);
        $data['result_apd'] = $this->P2k3l_m->tampil_apd($id);
        $data['result_pemantauan'] = $this->P2k3l_m->tampil_pemantauan($id);
        $data['result_alat'] = $this->P2k3l_m->tampil_alat($id);
        $data['result_sda'] = $this->P2k3l_m->tampil_sda($id);
        $data['result_pengawasan'] = $this->P2k3l_m->tampil_pengawasan($id);
        $data['identifikasi_aspek'] = $this->P2k3l_m->tampil_identifikasi_aspek($id);

        $data['title'] = 'Izin Pekerjaan Khusus';

        //If High Work Work
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('p2k3l/templates/header', $data);
        $this->load->view('p2k3l/templates/sidebar', $data);
        $this->load->view('p2k3l/templates/topbar', $data);
        $this->load->view('p2k3l/ipk/high_place_work', $data);
        $this->load->view('p2k3l/templates/footer', $data);
    }

    //approve safety
    public function aproveP2k3l($id_adm)
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
                    $this->setaproval_p2k3l($id_adm);
                    print_r('lu p2k3l, bukan kkontraktor');
                    // $this->setaproval_kontraktor();
                } elseif ($user['role_id'] == 3) {
                    print_r('lu gm, bukan kkontraktor');
                    // $this->setaproval_kontraktor();
                } elseif ($user['role_id'] == 4) {
                    print_r('lu gm, bukan kkontraktor');
                    // $this->setaproval_kontraktor($id_adm);
                } elseif ($user['role_id'] == 5) {
                    print_r('lu p2k3l, bukan kkontraktor');
                    // $this->setaproval_mgruser($id_adm);
                    // print_r('lu gmr user, bukan kkontraktor');
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

    function setaproval_p2k3l($id_adm)
    {

        $ip = $this->input->ip_address();


        $data = array(
            'apv_p2k3l' => '1',
            'ip_apv_p2k3l' => $ip,
            'date_apv_p2k3l' => time()
        );

        $this->db->update('administrasi', $data, array('id' => $id_adm));

        redirect('p2k3l/detail/' . $id_adm);
    }
}
