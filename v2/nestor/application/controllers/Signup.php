<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $this->_login(); //method private supaya bisa menjalankan login
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        //jika ada user
        if ($user) {
            if (password_verify($password, $user['password'])) {

                $data = [
                    'username' => $user['username'],
                ];
                $this->session->set_userdata($data);
                redirect('user');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
                Kata sandi tidak valid!
                </div>');
                redirect('signup/index');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Username tidak valid
            </div>');
            redirect('signup/index');
        }
    }

    public function signup()
    {
        //aturan untuk tiap-tiap kolom daftar
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[5]|matches[password2]',
            [
                'matches' => 'Password tidak sama dengan konfirmasi password',
                'min_length' => 'Kata sandi minimal 6 karakter'
            ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('signup');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
            ];

            $this->db->insert('users', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat, akun anda sudah terdaftar.
        </div>');
            redirect('signup/index');
        }
    }

    public function logout()
    {

        $this->session->unset_userdata('username');

        $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        Anda berhasil keluar
    </div>');
        redirect('signup/index');
    }
}
