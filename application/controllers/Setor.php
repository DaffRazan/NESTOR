<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Setor_model');
        $this->load->library('pagination');
    }

    public function index()
    {
        $data['title'] = 'Nestor - Input Setoran';
        $data['users'] = $this->db->get_where('users', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['data_profil'] = $this->db->get_where('data_profil', ['id_user' =>
        $this->session->userdata('id')])->row_array();

        $this->load->view('navbar_user', $data);
        $this->load->view('setor', $data);
    }

    public function displayGrafikHarga()
    {
        $data['title'] = 'Nestor - Grafik Setoran Harga Ikan';

        $data['setor'] = $this->db->get_where('setor', ['id_user' => $this->session->userdata('id')])->result_array();
        $data['users'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();

        $this->load->view('navbar_user', $data);
        $this->load->view('tampil_grafik_harga', $data);
    }

    public function displayGrafikBerat()
    {
        $data['title'] = 'Nestor - Grafik Setoran Berat Ikan';

        $data['setor'] = $this->db->get_where('setor', ['id_user' => $this->session->userdata('id')])->result_array();
        $data['users'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();

        $this->load->view('navbar_user', $data);
        $this->load->view('tampil_grafik_berat', $data);
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
        redirect('setor/riwayat_setoran');
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

    public function riwayat_setoran_orderByHargaTermurah()
    {
        $data['title'] = 'Nestor - Riwayat Setoran';
        $data['users'] = $this->db->get_where('users', ['username' =>
        $this->session->userdata('username')])->row_array();

        if ($this->db->where('id_user', $this->session->userdata('id'))) {
            $data['setor'] = $this->Setor_model->orderByHargaAsc();
        }

        //kalau mau cari data ikan
        if ($this->input->post('keyword')) {
            if ($this->db->where('id_user', $this->session->userdata('id'))) {
                $data['setor'] = $this->Setor_model->cariDataSetoran();
            }
        }

        $this->load->view('navbar_user', $data);
        $this->load->view('order/riwayat_setoran_hargaAsc', $data);
    }

    public function riwayat_setoran_orderByHargaTermahal()
    {
        $data['title'] = 'Nestor - Riwayat Setoran';
        $data['users'] = $this->db->get_where('users', ['username' =>
        $this->session->userdata('username')])->row_array();

        if ($this->db->where('id_user', $this->session->userdata('id'))) {
            $data['setor'] = $this->Setor_model->OrderByHargaDesc();
        }

        //kalau mau cari data ikan
        if ($this->input->post('keyword')) {
            if ($this->db->where('id_user', $this->session->userdata('id'))) {
                $data['setor'] = $this->Setor_model->cariDataSetoran();
            }
        }

        $this->load->view('navbar_user', $data);
        $this->load->view('order/riwayat_setoran_hargaDesc', $data);
    }

    public function riwayat_setoran_orderByTanggalAsc()
    {
        $data['title'] = 'Nestor - Riwayat Setoran';
        $data['users'] = $this->db->get_where('users', ['username' =>
        $this->session->userdata('username')])->row_array();

        if ($this->db->where('id_user', $this->session->userdata('id'))) {
            $data['setor'] = $this->Setor_model->OrderByTanggalAsc();
        }

        //kalau mau cari data ikan
        if ($this->input->post('keyword')) {
            if ($this->db->where('id_user', $this->session->userdata('id'))) {
                $data['setor'] = $this->Setor_model->cariDataSetoran();
            }
        }

        $this->load->view('navbar_user', $data);
        $this->load->view('order/riwayat_setoran_tanggalAsc', $data);
    }

    public function riwayat_setoran_orderByTanggalDesc()
    {
        $data['title'] = 'Nestor - Riwayat Setoran';
        $data['users'] = $this->db->get_where('users', ['username' =>
        $this->session->userdata('username')])->row_array();

        if ($this->db->where('id_user', $this->session->userdata('id'))) {
            $data['setor'] = $this->Setor_model->OrderByTanggalDesc();
        }

        //kalau mau cari data ikan
        if ($this->input->post('keyword')) {
            if ($this->db->where('id_user', $this->session->userdata('id'))) {
                $data['setor'] = $this->Setor_model->cariDataSetoran();
            }
        }

        $this->load->view('navbar_user', $data);
        $this->load->view('order/riwayat_setoran_tanggalDesc', $data);
    }

    public function hapusSetoran($id_setor)
    {
        $this->Setor_model->hapusDataSetoran($id_setor);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('setor/riwayat_setoran');
    }

    public function cetak()
    {
        $data['title'] = 'Nestor - Cetak Setoran';
        $data['users'] = $this->db->get_where('users', ['username' =>
        $this->session->userdata('username')])->row_array();

        if ($this->db->where('id_user', $this->session->userdata('id'))) {
            $data['setor'] = $this->Setor_model->getAllSetoran();
        }

        $this->load->view('cetak', $data);
    }
}
