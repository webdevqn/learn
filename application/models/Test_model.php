<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Test_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_users()
    {
        $result = $this->db->query("select * from test");
        return $result->result_array();
    }
}
