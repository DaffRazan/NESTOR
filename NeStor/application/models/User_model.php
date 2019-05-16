<?php

class User_model extends CI_Model
{
    public function getProfileById($id)
    {
        return $this->db->get_where('data_profil', ['id' => $id])->row_array();
    }

    public function tambahData()
    {
        $data = [
            "id_user" => $this->session->userdata('id'),
            "nama_kpl" => $this->input->post('nama_kpl', true),
            "no_kpl" => $this->input->post('no_kpl', true),
            "umur_kpl" => $this->input->post('umur_kpl', true),
            "bendera" => $this->input->post('bendera', true),
            "jum_ABK" => $this->input->post('jum_ABK', true),
            "nama_bos" => $this->input->post('nama_bos', true),
            "alamat_bos" => $this->input->post('alamat_bos', true),
            "umur_bos" => $this->input->post('umur_bos', true),
            "kewarganegaraan" => $this->input->post('kewarganegaraan', true),
            "no_ponsel" => $this->input->post('no_ponsel', true),
            "email" => $this->input->post('email', true)
        ];

        $this->db->insert('data_profil', $data);
    }

    public function editData()
    {
        $data = [
            "id_user" => $this->session->userdata('id'),
            "nama_kpl" => $this->input->post('nama_kpl', true),
            "no_kpl" => $this->input->post('no_kpl', true),
            "umur_kpl" => $this->input->post('umur_kpl', true),
            "bendera" => $this->input->post('bendera', true),
            "jum_ABK" => $this->input->post('jum_ABK', true),
            "nama_bos" => $this->input->post('nama_bos', true),
            "alamat_bos" => $this->input->post('alamat_bos', true),
            "umur_bos" => $this->input->post('umur_bos', true),
            "kewarganegaraan" => $this->input->post('kewarganegaraan', true),
            "no_ponsel" => $this->input->post('no_ponsel', true),
            "email" => $this->input->post('email', true)
        ];

        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('data_profil', $data);
    }
}
