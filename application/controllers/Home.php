<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setor_model');
        $this->load->helper('tglindo');
    }

    public function index()
    {
        $data['title'] = 'NeStor - Homepage';
        $data['users'] = $this->db->get_where('users', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['setor'] = $this->Setor_model->grafikperMinggu();
        $data['setor1'] = $this->Setor_model->termurah();
        $data['setor2'] = $this->Setor_model->termahal();
        $data['setor3'] = $this->Setor_model->tersedikit();
        $data['setor4'] = $this->Setor_model->terbanyak();

        if ($this->session->userdata('username')) {
            $this->load->view('navbar_user', $data);
            $this->load->view('homepage_user');
        } else {
            $this->load->view('navbar', $data);
            $this->load->view('homepage');
        }
    }

    public function grafikHarga()
    {
        $data['title'] = 'Nestor - Grafik Setoran Harga Ikan';

        $data['setor'] = $this->Setor_model->grafikperMinggu();
        $this->load->view('navbar', $data);
        $this->load->view('grafik_harga', $data);
    }

    public function grafikBerat()
    {
        $data['title'] = 'Nestor - Grafik Setoran Berat Ikan';

        $data['setor'] = $this->Setor_model->grafikperMinggu();

        $this->load->view('navbar', $data);
        $this->load->view('grafik_berat', $data);
    }
}
