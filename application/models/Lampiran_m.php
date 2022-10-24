<?php
class Lampiran_m extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function status_lampiran()
    {
        return $this->db->get('lampiran')->result_array();
    }
}
