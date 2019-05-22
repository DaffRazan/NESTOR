<?php

class Setor_model extends CI_Model
{

    public function getAllSetoran()
    {
        return $this->db->get('setor')->result_array();
    }

    public function cariDataSetoran()
    {
        $keyword = $this->input->post('keyword', true);

        $this->db->like('jenis', $keyword);

        return $this->db->get('setor')->result_array();
    }

    public function hapusDataSetoran($id_setor)
    {
        $this->db->where('id_setor', $id_setor);
        $this->db->delete('setor');
    }
}
