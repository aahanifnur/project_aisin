<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Approval_m extends CI_Model
{
    public function s_lampiran($stts_lampiran)
    {
        $query = $this->db->query("UPDATE approval set status_lampiran = 1
                                    WHERE NO_SEQUENCE '$stts_lampiran'");
    }

    // public function v_lampiran()
    // {
    //     return $this->db->get("lampiran");
    // }
}
