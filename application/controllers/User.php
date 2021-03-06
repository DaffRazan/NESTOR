<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->model('Setor_model');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('tglindo');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {
            $data['title'] = 'Nestor - Homepage User';
            $data['users'] = $this->db->get_where('users', ['username' =>
            $this->session->userdata('username')])->row_array();

            //set userdata perdata setoran
            if ($this->db->where('id_user', $this->session->userdata('id'))) {
                $data['setor1'] = $this->Setor_model->getMaxHarga();
            }

            if ($this->db->where('id_user', $this->session->userdata('id'))) {
                $data['setor2'] = $this->Setor_model->getMinHarga();
            }

            if ($this->db->where('id_user', $this->session->userdata('id'))) {
                $data['setor3'] = $this->Setor_model->getTotalHarga();
            }

            if ($this->db->where('id_user', $this->session->userdata('id'))) {
                $data['setor4'] = $this->Setor_model->getTotalBerat();
            }

            $this->load->view('navbar_user', $data);
            $this->load->view('homepage_user', $data);
        } else {
            redirect("home");
        }
    }

    public function ubahPassword()
    {
        $data['title'] = 'Nestor - Ubah Password';
        $data['users'] = $this->db->get_where('users', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules(
            'current_password',
            'Password Sekarang',
            'required|trim',
            [
                'required' => 'Password sekarang harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'newpassword1',
            'Password Baru',
            'required|trim|min_length[6]|matches[newpassword2]',
            [
                'required' => 'Password Baru harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'newpassword2',
            'Konfirmasi Password Baru',
            'required|trim|min_length[6]|matches[newpassword1]',
            [
                'required' => 'Konfirmasi Password Baru harus diisi'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('navbar_user', $data);
            $this->load->view('ubah_password', $data);
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('newpassword1');

            if (!password_verify($current_password, $data['users']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password sekarang salah!
                </div>');
                redirect('user/ubahpassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password baru tidak boleh sama dengan password sekarang!
                    </div>');
                    redirect('user/ubahpassword');
                } else {
                    //password ganti
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('users');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password berhasil diubah!
                    </div>');
                    redirect('user/profilUser');
                }
            }
        }
    }

    public function mainProfil()
    {
        $data['title'] = 'Nestor - Data Profil Kapal';
        $data['users'] = $this->db->get_where('users', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('navbar_user', $data);
        $this->load->view('main_profil', $data);
    }

    public function profil()
    {
        $data['title'] = 'Nestor - Data Profil Kapal';
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
        $data['title'] = 'Nestor - Isi Profil Kapal';
        $data['users'] = $this->db->get_where('users', ['username' =>
        $this->session->userdata('username')])->row_array();

        //ambil data id yang sama 
        $data2['data_profil'] = $this->db->get_where('data_profil', ['id_user' =>
        $this->session->userdata('id')])->row_array();

        //Aturan/validasi untuk setiap kolom
        $this->form_validation->set_rules('no_kpl', 'Nomor Kapal', 'required', ['required' => 'Nomor Kapal Perlu diisi']);
        $this->form_validation->set_rules('nama_kpl', 'Nama Kapal', 'required', ['required' => 'Nama Kapal Perlu diisi']);
        $this->form_validation->set_rules('tahun_kpl', 'Tahun pembuatan kapal', 'required|numeric', ['required' => 'Tahun pembuatan kapal perlu diisi']);
        $this->form_validation->set_rules('bendera', 'Asal Negara', 'required', ['required' => 'Asal negara Perlu diisi']);
        $this->form_validation->set_rules('nama_bos', 'Nama Pemilik', 'required', ['required' => 'Nama pemilik Perlu diisi']);
        $this->form_validation->set_rules('alamat_bos', 'Alamat', 'required', ['required' => 'Alamat Perlu diisi']);
        $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required', ['required' => 'kewarganegaraaan Perlu diisi']);
        $this->form_validation->set_rules('no_ponsel', 'Nomor Telepon/hp', 'required|max_length[12]', ['required' => 'No.Telepon/HP Perlu diisi']);

        //kalau salah isi form
        if ($this->form_validation->run() == false) {
            $this->load->view('navbar_user', $data);
            $this->load->view('isi_profil', $data2);
        } else { //kalau benar
            $this->User_model->tambahData();
            $this->session->set_flashdata('pesan_profil', '<div class="alert alert-success" role="alert">
            Profil anda sudah disimpan!
        </div>');
            redirect('user/profil');
        }
    }

    public function editProfil()
    {
        $data['title'] = 'Nestor - Edit Profil Kapal';
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
        $this->form_validation->set_rules('tahun_kpl', 'Tahun pembuatan kapal', 'required|numeric', ['required' => 'Alamat Perlu diisi']);
        $this->form_validation->set_rules('alamat_bos', 'Alamat', 'required', ['required' => 'Alamat Perlu diisi']);
        $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required', ['required' => 'kewarganegaraaan Perlu diisi']);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', ['required' => 'kewarganegaraaan Perlu diisi']);
        $this->form_validation->set_rules('no_ponsel', 'Nomor Telepon/hp', 'required|max_length[12]|numeric', [
            'required' => 'No.Telepon/HP Perlu diisi',
            'max_length' => 'No.Telepon/HP maksimal 12 karakter'
        ]);

        //kalau salah isi form
        if ($this->form_validation->run() == false) {
            $this->load->view('navbar_user', $data);
            $this->load->view('edit_profil', $data2);
        } else { //kalau benar
            $this->User_model->editData();
            $this->session->set_flashdata('pesan_profil', '<div class="alert alert-success" role="alert">
            Profil kapal sudah disimpan!
        </div>');
            redirect('user/profil');
        }
    }

    public function profilUser()
    {
        $data['title'] = 'Nestor - Profil Identitas User';
        $data['users'] = $this->db->get_where('users', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('navbar_user', $data);
        $this->load->view('profil_user', $data);
    }

    public function ubahPhoto()
    {
        $data['title'] = 'Nestor - Ubah Photo/Nama User';
        $data['users'] = $this->db->get_where('users', ['id' =>
        $this->session->userdata('id')])->row_array();

        $this->form_validation->set_rules('fullname', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('navbar_user', $data);
            $this->load->view('ubah_photo', $data);
        } else {
            $id_user = $this->session->userdata('id');
            $fullname =  $this->input->post('fullname', true);

            //cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = 'assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id_user = $this->session->userdata('id');

            $this->db->set('fullname', $fullname);
            $this->db->where('id', $id_user);
            $this->db->update('users');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Profil berhasil diubah!
                </div>');
            redirect('user/profiluser');
        }
    }
}
