<?php

class Setor_model extends CI_Model
{

    public function getAllSetoran()
    {
        return $this->db->get('setor')->result_array();
    }

    public function getMaxHarga()
    {
        $this->db->select_max('harga');
        // $this->db->where('`harga` = (select max(harga) from `setor`)', NULL, FALSE);
        return $this->db->get('setor')->row_array();
    }

    public function getMinHarga()
    {
        $this->db->select_min('harga');
        // $this->db->where('`harga` = (select max(harga) from `setor`)', NULL, FALSE);
        return $this->db->get('setor')->row_array();
    }

    public function getTotalHarga()
    {
        $this->db->select_sum('harga');
        return $this->db->get('setor')->row_array();
    }

    public function getTotalBerat()
    {
        $this->db->select_sum('berat');
        return $this->db->get('setor')->row_array();
    }

    // Beginning of Order By
    public function OrderByHargaAsc()
    {
        $this->db->order_by('harga', 'asc');
        $this->db->select('*');
        return $this->db->get('setor')->result_array();
    }

    public function OrderByHargaDesc()
    {
        $this->db->order_by('harga', 'desc');
        $this->db->select('*');
        return $this->db->get('setor')->result_array();
    }

    public function OrderByTanggalAsc()
    {
        $this->db->order_by('tanggal', 'asc');
        $this->db->select('*');
        return $this->db->get('setor')->result_array();
    }

    public function OrderByTanggalDesc()
    {
        $this->db->order_by('tanggal', 'desc');
        $this->db->select('*');
        return $this->db->get('setor')->result_array();
    }
    //end of order by

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

    public function grafikperMinggu()
    {
        $this->db->select('*');
        $this->db->where('tanggal > DATE_SUB(NOW(), INTERVAL 1 WEEK) ORDER BY tanggal ASC');
        return $this->db->get('setor')->result_array();
    }

    //Untuk Hari ini

    public function termurah()
    {
        $this->db->select('*');
        $this->db->where('tanggal > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY harga ASC LIMIT 1');
        //'DATE(tanggal)=CURDATE()ORDER BY harga DESC LIMIT 1'
        return $this->db->get('setor')->result_array();
    }

    public function termahal()
    {
        $this->db->select('*');
        $this->db->where('tanggal > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY harga DESC LIMIT 1');
        return $this->db->get('setor')->result_array();
    }

    public function tersedikit()
    {
        $this->db->select('*');
        $this->db->where('tanggal > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY berat ASC LIMIT 1');
        return $this->db->get('setor')->result_array();
    }

    public function terbanyak()
    {
        $this->db->select('*');
        $this->db->where('tanggal > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY berat DESC LIMIT 1');
        return $this->db->get('setor')->result_array();
    }
}
