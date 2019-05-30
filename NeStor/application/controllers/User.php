<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {
            $data['title'] = 'Nestor - Homepage User';
            $data['users'] = $this->db->get_where('users', ['username' =>
            $this->session->userdata('username')])->row_array();

            $this->load->view('navbar_user', $data);
            $this->load->view('homepage_user', $data);
        } else {
            redirect("home");
        }
    }

    public function profil()
    {
        $data['title'] = 'Nestor - Data Profil';
        $data['users'] = $this->db->get_where('users', ['username' =>
        $this->session->userdata('username')])->row_array();

        //ambil data id yang sama 
        $data2['data_profil'] = $this->db->get_where('data_profil', ['id_user' =>
        $this->session->userdata('id')])->row_array();

        if ($data2['data_profil']) {
            $this->load->view('navbar_user', $data);
            $this->load->view('profil', $data2);
        } else {
            redirect('user/isiProfil');
        }
    }

    public function isiProfil()
    {
        $data['title'] = 'Nestor - Isi Profil';
        $data['users'] = $this->db->get_where('users', ['username' =>
        $this->session->userdata('username')])->row_array();

        //ambil data id yang sama 
        $data2['data_profil'] = $this->db->get_where('data_profil', ['id_user' =>
        $this->session->userdata('id')])->row_array();

        //Aturan/validasi untuk setiap kolom
        $this->form_validation->set_rules('no_kpl', 'Nomor Kapal', 'required', ['required' => 'Nomor Kapal Perlu diisi']);
        $this->form_validation->set_rules('nama_kpl', 'Nama Kapal', 'required', ['required' => 'Nama Kapal Perlu diisi']);
        $this->form_validation->set_rules('bendera', 'Asal Negara', 'required', ['required' => 'Asal negara Perlu diisi']);
        $this->form_validation->set_rules('nama_bos', 'Nama Pemilik', 'required', ['required' => 'Nama pemilik Perlu diisi']);
        $this->form_validation->set_rules('alamat_bos', 'Alamat', 'required', ['required' => 'Alamat Perlu diisi']);
        $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required', ['required' => 'kewarganegraaan Perlu diisi']);
        $this->form_validation->set_rules('no_ponsel', 'Nomor Telepon/hp', 'required', ['required' => 'No.Telepon/HP Perlu diisi']);

        //kalau salah isi form
        if ($this->form_validation->run() == false) {
            $this->load->view('navbar_user', $data);
            $this->load->view('isi_profil', $data2);
        } else { //kalau benar
            $this->User_model->tambahData();
            $this->session->set_flashdata('pesan_profil', '<div class="alert alert-success" role="alert">
            Profil anda sudah disimpan!
        </div>');
            redirect('user/index');
        }
    }
}
