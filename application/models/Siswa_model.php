<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{

    public function getAllOrder()
    {
        return $this->db->get('data_siswa')->result_array();
    }

    public function getOrder($limit, $start)
    {
        // if ($keyword) {
        //     $this->db->like('nama_siswa', $keyword);
        //     $this->db->or_like('status', $keyword);
        // }
        return $this->db->get('data_siswa', $limit, $start,)->result_array();
    }

    public function countAllOrder()
    {
        return $this->db->get('data_siswa')->num_rows();
    }

    public function tambahDataSiswa()
    {
        $data = [
            'nama_siswa' => ($this->input->post('nama_siswa', true)),
            'orang_tua' => ($this->input->post('orang_tua', true)),
            'jenis_kelamin' => ($this->input->post('jk', true)),
            'tanggal_lahir' => ($this->input->post('tanggal_lahir', true)),
            'usia' => ($this->input->post('usia', true)),
            'pendidikan' => ($this->input->post('pendidikan', true)),
            'alamat' => ($this->input->post('alamat', true)),
            'telepon' => ($this->input->post('telepon', true)),
            'tanggal_bayar' => ($this->input->post('tanggal_bayar', true)),
            'paket' => ($this->input->post('nama_paket', true)),
            'jumlah' => ($this->input->post('harga', true)),
            'id_konfirmasi' => 1
        ];

        $this->db->insert('data_siswa', $data);
    }

    public function editSiswa()
    {
        $data = [
            'nama_siswa' => ($this->input->post('nama_siswa', true)),
            'orang_tua' => ($this->input->post('orang_tua', true)),
            'jenis_kelamin' => ($this->input->post('jk', true)),
            'tanggal_lahir' => ($this->input->post('tanggal_lahir', true)),
            'usia' => ($this->input->post('usia', true)),
            'pendidikan' => ($this->input->post('pendidikan', true)),
            'alamat' => ($this->input->post('alamat', true)),
            'telepon' => ($this->input->post('telepon', true)),
            'tanggal_bayar' => ($this->input->post('tanggal_bayar', true)),
            'jumlah' => ($this->input->post('jumlah', true)),
            'paket' => ($this->input->post('nama_paket', true))
        ];

        $this->db->where('id_siswa', $this->input->post('id_siswa'));
        $this->db->update('data_siswa', $data);
    }

    public function hapusSiswa($id_siswa)
    {
        $this->db->delete('data_siswa', ['id_siswa' => $id_siswa]);
    }

    public function cariDataSiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_siswa', $keyword);
        return $this->db->get('data_siswa')->result_array();
    }

    public function get_nama_produk()
    {
        return $this->db->get('data_produk')->result_array();
    }

    public function get_konfirmasi()
    {
        $this->db->join('data_konfirmasi', 'data_konfirmasi.id_konfirmasi = data_siswa.id_konfirmasi ');
        $query = $this->db->get('data_siswa');
        return $query->result_array();
    }


    public function detail_siswa($id_siswa)
    {
        $this->db->join('data_konfirmasi', 'data_konfirmasi.id_konfirmasi = data_siswa.id_konfirmasi', 'left');
        $this->db->where('data_siswa.id_siswa', $id_siswa);
        $query = $this->db->get('data_siswa');
        return $query->row_array();
    }
}
