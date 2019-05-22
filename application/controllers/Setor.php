<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Setor_model');
    }

    public function index()
    {
        $data['title'] = 'Nestor - Input Setoran';
        $data['users'] = $this->db->get_where('users', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('navbar_user', $data);
        $this->load->view('setor');
    }



    public function input_setoran()
    {
        date_default_timezone_set("Asia/Jakarta");
        $tanggal =  date('Y-m-d');
        $waktu = date('H:i:s');

        for ($j = 0; $j < count($_POST['jenis']); $j++) {
            $jenis = $_POST['jenis'][$j];
            $berat = $_POST['berat'][$j];
            $harga = $_POST['harga'][$j];

            $data = [
                "jenis" => $jenis,
                "berat" => $berat,
                "harga" => $harga,
                "tanggal" => $tanggal,
                "waktu" => $waktu,
                "id_user" => $this->session->userdata('id')
            ];

            $this->db->insert('setor', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data setoran berhasil ditambahkan!
            </div>');
        }
        redirect('setor');
    }

    public function riwayat_setoran()
    {
        $data['title'] = 'Nestor - Riwayat Setoran';
        $data['users'] = $this->db->get_where('users', ['username' =>
        $this->session->userdata('username')])->row_array();

        if ($this->db->where('id_user', $this->session->userdata('id'))) {
            $data['setor'] = $this->Setor_model->getAllSetoran();
        }

        //kalau mau cari data ikan
        if ($this->input->post('keyword')) {
            if ($this->db->where('id_user', $this->session->userdata('id'))) {
                $data['setor'] = $this->Setor_model->cariDataSetoran();
            }
        }

        $this->load->view('navbar_user', $data);
        $this->load->view('riwayat_setoran', $data);
    }

    public function hapusSetoran($id_setor)
    {
        $this->Setor_model->hapusDataSetoran($id_setor);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('setor/riwayat_setoran');
    }
}
