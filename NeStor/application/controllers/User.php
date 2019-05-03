<?php

class User extends CI_Controller
{

    public function index()
    {

        $data['users'] = $this->db->get_where('users', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('navbar_user', $data);
        $this->load->view('homepage');
    }
}
