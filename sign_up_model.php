<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sign_up_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insert_data($tablename, $data) {
        $this->db->insert($tablename, $data);
    }

    public function get_required_id($select_column, $tablename, $where, $id) {
        $this->db->select($select_column);
        $this->db->from($tablename);
        $this->db->where($where, $id);
        $query = $this->db->get();
        return $query->result()[0];
    }

}

/* End of file user_detail/user_detail.php */
/* Location: ./application/models/user_detail/user_detail.php */

