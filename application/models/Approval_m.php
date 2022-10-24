<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Approval_m extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function status($stts_lampiran)
    {
        // $query = $this->db->query("UPDATE approval set status_lampiran = 1
        //                             WHERE NO_SEQUENCE '$stts_lampiran'");
        return $this->db->get('lampiran')->result();
    }

    public function setstatus()
    {
        return $this->db->get('lampiran')->result();
    }

    function setaproval_kontraktor()
    {
        // $aortadb = $this->load->database("sim_a", TRUE);
        // $query = $aortadb->query("UPDATE administrasi set apv_kontraktor = 1");
        // $this->db->set('apv_kontraktor = 1');


        $data = array('apv_kontraktor = 1');
        $this->db->update('administrasi', $data);
    }

    // public function v_lampiran()
    // {
    //     return $this->db->get("lampiran");
    // }
}
