<?php

class Home extends CI_Controller
{

    public function index()
    {

        $data['title'] = 'NeStor - Homepage';
        $data['users'] = $this->db->get_where('users', ['username' =>
        $this->session->userdata('username')])->row_array();

        if ($this->session->userdata('username')) {
            $this->load->view('navbar_user', $data);
            $this->load->view('homepage_user');
        } else {
            $this->load->view('navbar', $data);
            $this->load->view('homepage');
        }
    }
}
