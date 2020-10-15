<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class register_model extends CI_Model {
    $data=[
        "Username" => $this->input->post("username",true),
        "Email" => $this->input->post("email",true),
        "Password" => $this->input->post("password",true),
        "Active" => 0,
        "Level" => 'Pegawai'

        $this->db->insert('admin/login', $data);
    ];
    

}

/* End of file register_model.php */
