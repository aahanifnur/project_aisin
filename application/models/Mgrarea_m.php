<?php
class Mgrarea_m extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function SemuaData()
    {
        return $this->db->get('identifikasi_aspek')->result_array(); //web e endi? sek mas
    }

    // public function getIdentifikasiAspekById($adm_id)
    // {
    //     return $this->db->get_where('identifikasi_aspek', ['adm_id' => $adm_id])->row_array();
    // }

    public function akun_user()
    {
        return $this->db->get('user')->result_array();
    }

    public function inputData()
    {
        //$id = $this->db->get('identifikasi_aspek')->result_array(); //dikei kondisi (where) carane pie mas?
        // $id = $this->db->get_where('identifikasi_aspek', array('id' => $id), $limit, $offset)->result_array(); 
        //ssk ae yo rodo kopleks iki. heem mas, siap, suwun ya mas ok

        // return $this->db->get_where('administrasi', ['adm_id'])->result_array();

        $data = [
            // "adm_id" => $this->db->get('administrasi.id', true), //ini adalah tambahan 
            //"adm_id" => $id[0],

            "adm_id" => $this->input->post('admId', true),
            "urutan_proses" => $this->input->post('urutanProses', true),
            "potensi_bahaya" => $this->input->post('potensiBahaya', true),
            "k3l" => $this->input->post('jenis', true),
            "tindakan_pencegahan" => $this->input->post('tindakanPencegahan', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];
        $this->db->insert('identifikasi_aspek', $data);
        //sik neng view ne endi?
    }

    public function inputData_ipk()
    {
        //$id = $this->db->get('identifikasi_aspek')->result_array(); //dikei kondisi (where) carane pie mas?
        // $id = $this->db->get_where('identifikasi_aspek', array('id' => $id), $limit, $offset)->result_array(); 
        //ssk ae yo rodo kopleks iki. heem mas, siap, suwun ya mas ok
        $data_adm = [
            // "adm_id" => $this->db->get('administrasi.id', true), //ini adalah tambahan 
            //"adm_id" => $id[0],
            "urutan_proses" => $this->input->post('urutanProses', true),
            "potensi_bahaya" => $this->input->post('potensiBahaya', true),
            "k3l" => $this->input->post('jenis', true),
            "tindakan_pencegahan" => $this->input->post('tindakanPencegahan', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];

        $data_pekerja = [
            // "adm_id" => $this->db->get('administrasi.id', true), //ini adalah tambahan 
            //"adm_id" => $id[0],
            "urutan_proses" => $this->input->post('urutanProses', true),
            "potensi_bahaya" => $this->input->post('potensiBahaya', true),
            "k3l" => $this->input->post('jenis', true),
            "tindakan_pencegahan" => $this->input->post('tindakanPencegahan', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];

        $data_apd = [
            // "adm_id" => $this->db->get('administrasi.id', true), //ini adalah tambahan 
            //"adm_id" => $id[0],
            "urutan_proses" => $this->input->post('urutanProses', true),
            "potensi_bahaya" => $this->input->post('potensiBahaya', true),
            "k3l" => $this->input->post('jenis', true),
            "tindakan_pencegahan" => $this->input->post('tindakanPencegahan', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];

        $data_pemantauan = [
            // "adm_id" => $this->db->get('administrasi.id', true), //ini adalah tambahan 
            //"adm_id" => $id[0],
            "urutan_proses" => $this->input->post('urutanProses', true),
            "potensi_bahaya" => $this->input->post('potensiBahaya', true),
            "k3l" => $this->input->post('jenis', true),
            "tindakan_pencegahan" => $this->input->post('tindakanPencegahan', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];

        $data_peralatan = [
            // "adm_id" => $this->db->get('administrasi.id', true), //ini adalah tambahan 
            //"adm_id" => $id[0],
            "urutan_proses" => $this->input->post('urutanProses', true),
            "potensi_bahaya" => $this->input->post('potensiBahaya', true),
            "k3l" => $this->input->post('jenis', true),
            "tindakan_pencegahan" => $this->input->post('tindakanPencegahan', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];

        $data_sumber_daya = [
            // "adm_id" => $this->db->get('administrasi.id', true), //ini adalah tambahan 
            //"adm_id" => $id[0],
            "urutan_proses" => $this->input->post('urutanProses', true),
            "potensi_bahaya" => $this->input->post('potensiBahaya', true),
            "k3l" => $this->input->post('jenis', true),
            "tindakan_pencegahan" => $this->input->post('tindakanPencegahan', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];


        $data_pengawasan = [
            // "adm_id" => $this->db->get('administrasi.id', true), //ini adalah tambahan 
            //"adm_id" => $id[0],
            "urutan_proses" => $this->input->post('urutanProses', true),
            "potensi_bahaya" => $this->input->post('potensiBahaya', true),
            "k3l" => $this->input->post('jenis', true),
            "tindakan_pencegahan" => $this->input->post('tindakanPencegahan', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];

        $this->db->insert('addministrasi', $data_adm);
        $this->db->insert('nama_pekerja', $data_pekerja);
        $this->db->insert('apd', $data_apd);
        $this->db->insert('pemantauan', $data_pemantauan);
        $this->db->insert('peralatan', $data_peralatan);
        $this->db->insert('sumber_daya', $data_sumber_daya);
        $this->db->insert('pengawasan', $data_pengawasan);
        //sik neng view ne endi?
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function updateDataUser()
    {
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 4,
            'is_active' => 1,
            'date_created' => time()
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    public function dgetUserById($id)
    {
        return $this->db->get_where('identifikasi_aspek', ['id' => $id])->row_array();
    }

    public function updateData()
    {
        $data = [
            "urutan_proses" => $this->input->post('urutanProses', true),
            "potensi_bahaya" => $this->input->post('potensiBahaya', true),
            "k3l" => $this->input->post('jenis', true),
            "tindakan_pencegahan" => $this->input->post('tindakanPencegahan', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('identifikasi_aspek', $data);
    }

    public function hapusData($id)
    {
        $this->db->delete('identifikasi_aspek', ['id' => $id]);
    }

    public function tampil_pekerja($id)
    {
        return $this->db->get_where('nama_pekerja', ['adm_id' =>
        $id])->result_array();
    }

    public function tampil_apd($id)
    {
        return $this->db->get_where('apd', ['adm_id' =>
        $id])->result_array();
    }

    public function tampil_pemantauan($id)
    {
        return $this->db->get_where('pemantauan', ['adm_id' =>
        $id])->result_array();
    }

    public function tampil_alat($id)
    {
        return $this->db->get_where('peralatan', ['adm_id' =>
        $id])->result_array();
    }

    public function tampil_sda($id)
    {
        return $this->db->get_where('sumber_daya', ['adm_id' =>
        $id])->result_array();
    }

    public function tampil_pengawasan($id)
    {
        return $this->db->get_where('pengawasan', ['adm_id' =>
        $id])->result_array();
    }

    public function tampil_identifikasi_aspek($id)
    {
        return $this->db->get_where('pengawasan', ['adm_id' =>
        $id])->result_array();
    }

    public function administrasi($id)
    {
        // return $this->db->get_where('administrasi', ['user_id' =>
        // $id])->result_array();
        return $this->db->get_where('administrasi', ['id' =>
        $id])->result_array();
    }

    // public function lampiran($id)
    // {
    //     return $this->db->get_where('lampiran', ['adm_id' =>
    //     $id])->result_array();
    // }

    public function dashboard()
    {
        return $this->db->get('administrasi')->result_array();
    }
}
