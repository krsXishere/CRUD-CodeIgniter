<?php
defined('BASEPATH') or exit('No Direct script access allowed');
class Siswa_model extends CI_Model
{
    function getDataSiswa()
    {
        $query = $this->db->get('tb_siswa');
        return $query->result();
    }

    function insertDataSiswa($data)
    {
        $this->db->insert('tb_siswa', $data);
    }

    function getDetailDataSiswa($kode)
    {
        $this->db->where('Kode', $kode);
        $query = $this->db->get('tb_siswa');
        return $query->row();
    }

    function updateDataSiswa($kode, $data)
    {
        $this->db->where('Kode', $kode);
        $this->db->update('tb_siswa', $data);
    }

    function deleteDataSiswa($kode)
    {
        $this->db->where('Kode', $kode);
        $this->db->delete('tb_siswa');
    }
}
