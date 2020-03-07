

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan_model extends CI_Model
{
    public function get_jabatan()
    {
        return $this->db->get('data_jabatan')->result();
    }
}

/* End of file Jabatan_model.php */
