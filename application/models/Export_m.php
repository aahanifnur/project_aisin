<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Export_m extends CI_Model
{
    public function view()
    {
        return $this->db->get('administrasi')->result();
    }
}
