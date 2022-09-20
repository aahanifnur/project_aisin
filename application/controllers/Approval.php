<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Approval extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function lampiran($status_lampiran)
    {
        $data['lampiran_approve'] = $this->Approval_m->status($status_lampiran);
    }
}
