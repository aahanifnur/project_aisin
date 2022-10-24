<?php
class User_m extends CI_Model
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

    public function inputData()
    // public function inputData($table, $data)
    {
        //$id = $this->db->get('identifikasi_aspek')->result_array(); //dikei kondisi (where) carane pie mas?
        // $id = $this->db->get_where('identifikasi_aspek', array('id' => $id), $limit, $offset)->result_array(); 
        //ssk ae yo rodo kopleks iki. heem mas, siap, suwun ya mas ok

        // return $this->db->get_where('administrasi', ['adm_id'])->result_array();

        // return $this->db->get_where('administrasi', ['id' => $id])->row_array();

        //ini dibuka yaa klo gabisa
        $data = [
            // "adm_id" => $this->db->get('administrasi.id', true), //ini adalah tambahan 
            //"adm_id" => $id[0],

            // "adm_id" => $this->input->post(['adm_id'], true), 
            "urutan_proses" => $this->input->post('urutanProses', true),
            "potensi_bahaya" => $this->input->post('potensiBahaya', true),
            "dampak" => $this->input->post('dampak', true),
            "k3l" => $this->input->post('jenis', true),
            "tindakan_pencegahan" => $this->input->post('tindakanPencegahan', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];
        $this->db->insert('identifikasi_aspek', $data);
        //bates ini dibuka yaa klo gabisa

        // $query = $this->db->insert('identifikasi_aspek', $table, $data);
        // return $this->db->insert_id(); //return last insert id
        //sik neng view ne endi?
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function InputDataCheckList()
    {
        $data = [
            "status" => $this->input->post('status', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];
        $this->db->insert('cl_aktivitas', $data);
    }

    public function inputDataAdm($id_adm)
    {
        $data = [
            "user_id" => $id_adm,
            "company" => $this->input->post('kontraktor', true),
            "jenis_pekerjaan" => $this->input->post('kode_p', true),
            "nama_pekerjaan" => $this->input->post('pekerjaan', true),
            "dept_pekerjaan" => $this->input->post('dept_l', true),
            "lokasi_pekerjaan" => $this->input->post('lokasi', true),
            "tanggal_bekerja" => $this->input->post('s_tanggal', true),
            "akhir_bekerja" => $this->input->post('e_tanggal', true),
            "perpanjangan" => $this->input->post('perpanjangan', true),
            "pic_user" => $this->input->post('u_pic', true),
            "dept_user" => $this->input->post('u_dept', true),
            "cp_mandor" => $this->input->post('cp_mandor', true)
        ];
        $this->db->insert('administrasi', $data);
    }

    public function inputDataPekerja()
    {
        $data = [
            // "adm_id" => $this->input->post('company', true),
            "nama_pekerja" => $this->input->post('nama_pekerja', true),
            "training" => $this->input->post('training', true),
            "id_card" => $this->input->post('id_card', true)
        ];
        $this->db->insert('nama_pekerja', $data);
    }

    public function inputDataApd()
    {
        $data = [
            "company" => $this->input->post('kontraktor', true),
            "jenis_pekerjaan" => $this->input->post('kode_p', true),
            "nama_pekerjaan" => $this->input->post('pekerjaan', true),
            "dept_pekerjaan" => $this->input->post('dept_l', true),
            "lokasi_pekerjaan" => $this->input->post('lokasi', true),
            "tanggal_bekerja" => $this->input->post('s_tanggal', true),
            "akhir_bekerja" => $this->input->post('e_tanggal', true),
            "perpanjangan" => $this->input->post('perpanjangan', true),
            "pic_user" => $this->input->post('u_pic', true),
            "dept_user" => $this->input->post('u_dept', true),
            "cp_mandor" => $this->input->post('cp_mandor', true)
        ];
        $this->db->insert('administrasi', $data);
    }

    public function inputDataPemantauan()
    {
        $data = [
            "company" => $this->input->post('kontraktor', true),
            "jenis_pekerjaan" => $this->input->post('kode_p', true),
            "nama_pekerjaan" => $this->input->post('pekerjaan', true),
            "dept_pekerjaan" => $this->input->post('dept_l', true),
            "lokasi_pekerjaan" => $this->input->post('lokasi', true),
            "tanggal_bekerja" => $this->input->post('s_tanggal', true),
            "akhir_bekerja" => $this->input->post('e_tanggal', true),
            "perpanjangan" => $this->input->post('perpanjangan', true),
            "pic_user" => $this->input->post('u_pic', true),
            "dept_user" => $this->input->post('u_dept', true),
            "cp_mandor" => $this->input->post('cp_mandor', true)
        ];
        $this->db->insert('administrasi', $data);
    }

    public function inputDataAlat()
    {
        $data = [
            "company" => $this->input->post('kontraktor', true),
            "jenis_pekerjaan" => $this->input->post('kode_p', true),
            "nama_pekerjaan" => $this->input->post('pekerjaan', true),
            "dept_pekerjaan" => $this->input->post('dept_l', true),
            "lokasi_pekerjaan" => $this->input->post('lokasi', true),
            "tanggal_bekerja" => $this->input->post('s_tanggal', true),
            "akhir_bekerja" => $this->input->post('e_tanggal', true),
            "perpanjangan" => $this->input->post('perpanjangan', true),
            "pic_user" => $this->input->post('u_pic', true),
            "dept_user" => $this->input->post('u_dept', true),
            "cp_mandor" => $this->input->post('cp_mandor', true)
        ];
        $this->db->insert('administrasi', $data);
    }

    public function inputDataSda()
    {
        $data = [
            "company" => $this->input->post('kontraktor', true),
            "jenis_pekerjaan" => $this->input->post('kode_p', true),
            "nama_pekerjaan" => $this->input->post('pekerjaan', true),
            "dept_pekerjaan" => $this->input->post('dept_l', true),
            "lokasi_pekerjaan" => $this->input->post('lokasi', true),
            "tanggal_bekerja" => $this->input->post('s_tanggal', true),
            "akhir_bekerja" => $this->input->post('e_tanggal', true),
            "perpanjangan" => $this->input->post('perpanjangan', true),
            "pic_user" => $this->input->post('u_pic', true),
            "dept_user" => $this->input->post('u_dept', true),
            "cp_mandor" => $this->input->post('cp_mandor', true)
        ];
        $this->db->insert('administrasi', $data);
    }

    public function inputDataPengawasan()
    {
        $data = [
            "company" => $this->input->post('kontraktor', true),
            "jenis_pekerjaan" => $this->input->post('kode_p', true),
            "nama_pekerjaan" => $this->input->post('pekerjaan', true),
            "dept_pekerjaan" => $this->input->post('dept_l', true),
            "lokasi_pekerjaan" => $this->input->post('lokasi', true),
            "tanggal_bekerja" => $this->input->post('s_tanggal', true),
            "akhir_bekerja" => $this->input->post('e_tanggal', true),
            "perpanjangan" => $this->input->post('perpanjangan', true),
            "pic_user" => $this->input->post('u_pic', true),
            "dept_user" => $this->input->post('u_dept', true),
            "cp_mandor" => $this->input->post('cp_mandor', true)
        ];
        $this->db->insert('administrasi', $data);
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////

    // public function inputData_ipk()
    // {
    //     //$id = $this->db->get('identifikasi_aspek')->result_array(); //dikei kondisi (where) carane pie mas?
    //     // $id = $this->db->get_where('identifikasi_aspek', array('id' => $id), $limit, $offset)->result_array(); 
    //     //ssk ae yo rodo kopleks iki. heem mas, siap, suwun ya mas ok

    //     $data_pekerja = [
    //         // "adm_id" => $this->db->get('administrasi.id', true), //ini adalah tambahan 
    //         //"adm_id" => $id[0],
    //         "nama_pekerja" => $this->input->post('urutanProses', true),
    //         "training" => $this->input->post('potensiBahaya', true),
    //         "id_card" => $this->input->post('jenis', true)
    //     ];

    //     $data_apd = [
    //         // "adm_id" => $this->db->get('administrasi.id', true), //ini adalah tambahan 
    //         //"adm_id" => $id[0],
    //         "nama" => $this->input->post('urutanProses', true),
    //         "potensi_bahaya" => $this->input->post('potensiBahaya', true),
    //         "k3l" => $this->input->post('jenis', true),
    //         "tindakan_pencegahan" => $this->input->post('tindakanPencegahan', true),
    //         "keterangan" => $this->input->post('keterangan', true)
    //     ];

    //     $data_pemantauan = [
    //         // "adm_id" => $this->db->get('administrasi.id', true), //ini adalah tambahan 
    //         //"adm_id" => $id[0],
    //         "urutan_proses" => $this->input->post('urutanProses', true),
    //         "potensi_bahaya" => $this->input->post('potensiBahaya', true),
    //         "k3l" => $this->input->post('jenis', true),
    //         "tindakan_pencegahan" => $this->input->post('tindakanPencegahan', true),
    //         "keterangan" => $this->input->post('keterangan', true)
    //     ];

    //     $data_peralatan = [
    //         // "adm_id" => $this->db->get('administrasi.id', true), //ini adalah tambahan 
    //         //"adm_id" => $id[0],
    //         "urutan_proses" => $this->input->post('urutanProses', true),
    //         "potensi_bahaya" => $this->input->post('potensiBahaya', true),
    //         "k3l" => $this->input->post('jenis', true),
    //         "tindakan_pencegahan" => $this->input->post('tindakanPencegahan', true),
    //         "keterangan" => $this->input->post('keterangan', true)
    //     ];

    //     $data_sumber_daya = [
    //         // "adm_id" => $this->db->get('administrasi.id', true), //ini adalah tambahan 
    //         //"adm_id" => $id[0],
    //         "urutan_proses" => $this->input->post('urutanProses', true),
    //         "potensi_bahaya" => $this->input->post('potensiBahaya', true),
    //         "k3l" => $this->input->post('jenis', true),
    //         "tindakan_pencegahan" => $this->input->post('tindakanPencegahan', true),
    //         "keterangan" => $this->input->post('keterangan', true)
    //     ];


    //     $data_pengawasan = [
    //         // "adm_id" => $this->db->get('administrasi.id', true), //ini adalah tambahan 
    //         //"adm_id" => $id[0],
    //         "urutan_proses" => $this->input->post('urutanProses', true),
    //         "potensi_bahaya" => $this->input->post('potensiBahaya', true),
    //         "k3l" => $this->input->post('jenis', true),
    //         "tindakan_pencegahan" => $this->input->post('tindakanPencegahan', true),
    //         "keterangan" => $this->input->post('keterangan', true)
    //     ];

    //     $this->db->insert('nama_pekerja', $data_pekerja);
    //     $this->db->insert('apd', $data_apd);
    //     $this->db->insert('pemantauan', $data_pemantauan);
    //     $this->db->insert('peralatan', $data_peralatan);
    //     $this->db->insert('sumber_daya', $data_sumber_daya);
    //     $this->db->insert('pengawasan', $data_pengawasan);
    // }

    public function getUserById($id)
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

    // public function tampil_identifikasi_aspek($id)
    // {
    //     return $this->db->get_where('', ['adm_id' =>
    //     $id])->result_array();
    // }


    public function tampil_attach($id)
    {
        return $this->db->get_where('tt_attach', ['adm_id' =>
        $id])->result_array();
    }

    public function administrasi($id)
    {
        // return $this->db->get_where('administrasi', ['user_id' =>
        // $id])->result_array();
        // return $this->db->get_where('administrasi', ['id' =>
        // $adm_id])->result_array();
        return $this->db->get_where('administrasi', ['id' =>
        $id])->result_array();
    }

    // public function lampiran($id)
    // {
    //     return $this->db->get_where('lampiran', ['adm_id' =>
    //     $id])->result_array();
    // }

    public function dashboard($id_adm)
    {
        return $this->db->get_where('administrasi', ['user_id' => $id_adm])->result_array();
    }

    public function attachment_apv($id)
    {
        return $this->db->get_where('administrasi', ['id' => $id])->result_array();
    }

    // public function apv_administrasi($id_admin)
    // {
    //     return $this->db->get_where('administrasi', ['id' => $id_admin])->result_array();
    // }

    public function user_index($id)
    {
        // return $this->db->get_where('administrasi', ['user_id' =>
        // $id])->result_array();
        return $this->db->get_where('user', ['id' =>
        $id])->result_array();
    }
}
