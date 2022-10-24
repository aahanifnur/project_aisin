<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_m');
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['result'] = $this->Admin_m->dashboard();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function akun_kontraktor()
    {

        $data['title'] = 'Home';
        $data['akun'] = $this->Admin_m->akun_user();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/v_akun', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function buat_akun()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password do not match!',
            'min_length' => 'Password too short!'
        ]);

        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'SIM-A Registration';

            $this->load->view('templates/header', $data);
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/v_create_account', $data);
            $this->load->view('admin/templates/footer', $data);
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => htmlspecialchars($this->input->post('roleId'), true),
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class ="alert alert-success" role="alert">Akun berhasil ditambahkan</div>');
            redirect('admin/akun_kontraktor');
        }
    }

    public function edit_akun($id)
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);

        $data['user'] = $this->User_m->getUserById($id);
        $this->load->view('admin/v_edit_account', $data);
    }

    public function ubah_akun()
    {
        $this->User_m->updateDataUser();
        redirect('admin/akun_kontraktor');
    }

    public function detail($id)
    {
        $data['result1'] = $this->Admin_m->administrasi($id);
        $data['id_adm'] = $id;

        $data['result_pekerja'] = $this->Admin_m->tampil_pekerja($id);
        $data['result_apd'] = $this->Admin_m->tampil_apd($id);
        $data['result_pemantauan'] = $this->Admin_m->tampil_pemantauan($id);
        $data['result_alat'] = $this->Admin_m->tampil_alat($id);
        $data['result_sda'] = $this->Admin_m->tampil_sda($id);
        $data['result_pengawasan'] = $this->Admin_m->tampil_pengawasan($id);
        $data['identifikasi_aspek'] = $this->Admin_m->tampil_identifikasi_aspek($id);

        $data['title'] = 'Izin Pekerjaan Khusus';

        //If High Work Work
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/ipk/high_place_work', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    //approve safety

    public function aproveSafety($id_adm)
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
                    $this->setaproval_safety($id_adm);
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

    function setaproval_safety($id_adm)
    {

        $ip = $this->input->ip_address();


        $data = array(
            'apv_safety' => '1',
            'ip_apv_safety' => $ip,
            'date_apv_safety' => time()
        );

        $this->db->update('administrasi', $data, array('id' => $id_adm));

        redirect('admin/detail/' . $id_adm);
    }
}
