<?php
class User_m extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function SemuaData()
    {
        return $this->db->get('identifikasi_aspek')->result_array();
    }

    public function inputData()
    {
        $data = [
            "urutan_proses" => $this->input->post('urutanProses', true),
            "potensi_bahaya" => $this->input->post('potensiBahaya', true),
            "k3l" => $this->input->post('jenis', true),
            "tindakan_pencegahan" => $this->input->post('tindakanPencegahan', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];
        $this->db->insert('identifikasi_aspek', $data);
    }

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

    public function index_ipk()
    {
        return $this->db->get('nama_pekerja, apd, pemantauan, peralatan, sumber_daya, pengawasan')->result_array();


        // return $this->db->get('apd')->result_array();
        // return $this->db->get('pemantauan')->result_array();
    }

    public function administrasi()
    {
        return $this->db->get('administrasi')->result_array();
    }

    public function dashboard()
    {
        return $this->db->get('administrasi')->result_array();
    }
}
