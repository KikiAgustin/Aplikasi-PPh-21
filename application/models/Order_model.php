<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order_model extends CI_Model
{

    public function OrderSwimJakarta()
    {

        $data = [
            'nama_siswa' => ($this->input->post('name_siswa', true)),
            'nama_ortu' => ($this->input->post('nama_ortu', true)),
            'jenis_kelamin' => ($this->input->post('jk', true)),
            'usia' => ($this->input->post('usia', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah', true)),
            'telepon' => ($this->input->post('telepon', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal', true)),
            'nama_kolam' => ($this->input->post('kolam', true)),
            'nama_kelas' => ($this->input->post('kelas')),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];

        $this->db->insert('order_jakarta', $data);
    }

    public function OrderKelas1()
    {

        $data = [
            'nama_siswa' => ($this->input->post('name_siswa', true)),
            'nama_ortu' => ($this->input->post('nama_ortu', true)),
            'jenis_kelamin' => ($this->input->post('jk', true)),
            'usia' => ($this->input->post('usia', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah', true)),
            'telepon' => ($this->input->post('telepon', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal', true)),
            'nama_kolam' => ($this->input->post('kolam', true)),
            'nama_kelas' => ($this->input->post('kelas')),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];

        $this->db->insert('order_jakarta', $data);
    }

    public function OrderSwimJakarta02()
    {
        $data = [
            'nama_siswa' => ($this->input->post('name_siswa', true)),
            'nama_ortu' => ($this->input->post('nama_ortu', true)),
            'jenis_kelamin' => ($this->input->post('jk', true)),
            'usia' => ($this->input->post('usia', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah', true)),
            'telepon' => ($this->input->post('telepon', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal', true)),
            'nama_kolam' => ($this->input->post('kolam', true)),
            'nama_kelas' => ($this->input->post('kelas', true)),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];

        $this->db->insert('order_jakarta', $data);

        $data1 = [
            'nama_siswa' => ($this->input->post('name_siswa1', true)),
            'nama_ortu' => ($this->input->post('nama_ortu1', true)),
            'jenis_kelamin' => ($this->input->post('jk1', true)),
            'usia' => ($this->input->post('usia1', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah1', true)),
            'telepon' => ($this->input->post('telepon1', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal1', true)),
            'nama_kolam' => ($this->input->post('kolam1', true)),
            'nama_kelas' => ($this->input->post('kelas1', true)),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];

        $this->db->insert('order_jakarta', $data1);
    }

    public function OrderKelas2()
    {
        $data = [
            'nama_siswa' => ($this->input->post('name_siswa', true)),
            'nama_ortu' => ($this->input->post('nama_ortu', true)),
            'jenis_kelamin' => ($this->input->post('jk', true)),
            'usia' => ($this->input->post('usia', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah', true)),
            'telepon' => ($this->input->post('telepon', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal', true)),
            'nama_kolam' => ($this->input->post('kolam', true)),
            'nama_kelas' => ($this->input->post('kelas', true)),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];

        $this->db->insert('order_jakarta', $data);

        $data1 = [
            'nama_siswa' => ($this->input->post('name_siswa1', true)),
            'nama_ortu' => ($this->input->post('nama_ortu1', true)),
            'jenis_kelamin' => ($this->input->post('jk1', true)),
            'usia' => ($this->input->post('usia1', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah1', true)),
            'telepon' => ($this->input->post('telepon1', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal1', true)),
            'nama_kolam' => ($this->input->post('kolam1', true)),
            'nama_kelas' => ($this->input->post('kelas1', true)),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];

        $this->db->insert('order_jakarta', $data1);
    }

    public function orderJakarta03()
    {
        $data = [
            'nama_siswa' => ($this->input->post('name_siswa', true)),
            'nama_ortu' => ($this->input->post('nama_ortu', true)),
            'jenis_kelamin' => ($this->input->post('jk', true)),
            'usia' => ($this->input->post('usia', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah', true)),
            'telepon' => ($this->input->post('telepon', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal', true)),
            'nama_kolam' => ($this->input->post('kolam', true)),
            'nama_kelas' => ($this->input->post('kelas', true)),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];

        $this->db->insert('order_jakarta', $data);

        $data1 = [
            'nama_siswa' => ($this->input->post('name_siswa1', true)),
            'nama_ortu' => ($this->input->post('nama_ortu1', true)),
            'jenis_kelamin' => ($this->input->post('jk1', true)),
            'usia' => ($this->input->post('usia1', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah1', true)),
            'telepon' => ($this->input->post('telepon1', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal1', true)),
            'nama_kolam' => ($this->input->post('kolam1', true)),
            'nama_kelas' => ($this->input->post('kelas1', true)),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];

        $this->db->insert('order_jakarta', $data1);

        $data2 = [
            'nama_siswa' => ($this->input->post('name_siswa2', true)),
            'nama_ortu' => ($this->input->post('nama_ortu2', true)),
            'jenis_kelamin' => ($this->input->post('jk2', true)),
            'usia' => ($this->input->post('usia2', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah2', true)),
            'telepon' => ($this->input->post('telepon2', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal2', true)),
            'nama_kolam' => ($this->input->post('kolam2', true)),
            'nama_kelas' => ($this->input->post('kelas2')),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];
        $this->db->insert('order_jakarta', $data2);
    }

    public function orderKelas3()
    {
        $data = [
            'nama_siswa' => ($this->input->post('name_siswa', true)),
            'nama_ortu' => ($this->input->post('nama_ortu', true)),
            'jenis_kelamin' => ($this->input->post('jk', true)),
            'usia' => ($this->input->post('usia', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah', true)),
            'telepon' => ($this->input->post('telepon', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal', true)),
            'nama_kolam' => ($this->input->post('kolam', true)),
            'nama_kelas' => ($this->input->post('kelas', true)),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];

        $this->db->insert('order_jakarta', $data);

        $data1 = [
            'nama_siswa' => ($this->input->post('name_siswa1', true)),
            'nama_ortu' => ($this->input->post('nama_ortu1', true)),
            'jenis_kelamin' => ($this->input->post('jk1', true)),
            'usia' => ($this->input->post('usia1', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah1', true)),
            'telepon' => ($this->input->post('telepon1', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal1', true)),
            'nama_kolam' => ($this->input->post('kolam1', true)),
            'nama_kelas' => ($this->input->post('kelas1', true)),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];

        $this->db->insert('order_jakarta', $data1);

        $data2 = [
            'nama_siswa' => ($this->input->post('name_siswa2', true)),
            'nama_ortu' => ($this->input->post('nama_ortu2', true)),
            'jenis_kelamin' => ($this->input->post('jk2', true)),
            'usia' => ($this->input->post('usia2', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah2', true)),
            'telepon' => ($this->input->post('telepon2', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal2', true)),
            'nama_kolam' => ($this->input->post('kolam2', true)),
            'nama_kelas' => ($this->input->post('kelas2')),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];
        $this->db->insert('order_jakarta', $data2);
    }


    public function orderJakarta04()
    {
        $data = [
            'nama_siswa' => ($this->input->post('name_siswa', true)),
            'nama_ortu' => ($this->input->post('nama_ortu', true)),
            'jenis_kelamin' => ($this->input->post('jk', true)),
            'usia' => ($this->input->post('usia', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah', true)),
            'telepon' => ($this->input->post('telepon', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal', true)),
            'nama_kolam' => ($this->input->post('kolam', true)),
            'nama_kelas' => ($this->input->post('kelas', true)),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];

        $this->db->insert('order_jakarta', $data);

        $data1 = [
            'nama_siswa' => ($this->input->post('name_siswa1', true)),
            'nama_ortu' => ($this->input->post('nama_ortu1', true)),
            'jenis_kelamin' => ($this->input->post('jk1', true)),
            'usia' => ($this->input->post('usia1', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah1', true)),
            'telepon' => ($this->input->post('telepon1', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal1', true)),
            'nama_kolam' => ($this->input->post('kolam1', true)),
            'nama_kelas' => ($this->input->post('kelas1', true)),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];

        $this->db->insert('order_jakarta', $data1);

        $data2 = [
            'nama_siswa' => ($this->input->post('name_siswa2', true)),
            'nama_ortu' => ($this->input->post('nama_ortu2', true)),
            'jenis_kelamin' => ($this->input->post('jk2', true)),
            'usia' => ($this->input->post('usia2', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah2', true)),
            'telepon' => ($this->input->post('telepon2', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal2', true)),
            'nama_kolam' => ($this->input->post('kolam2', true)),
            'nama_kelas' => ($this->input->post('kelas2')),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];
        $this->db->insert('order_jakarta', $data2);

        $data3 = [
            'nama_siswa' => ($this->input->post('name_siswa3', true)),
            'nama_ortu' => ($this->input->post('nama_ortu3', true)),
            'jenis_kelamin' => ($this->input->post('jk3', true)),
            'usia' => ($this->input->post('usia3', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah3', true)),
            'telepon' => ($this->input->post('telepon3', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal3', true)),
            'nama_kolam' => ($this->input->post('kolam3', true)),
            'nama_kelas' => ($this->input->post('kelas3', true)),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];
        $this->db->insert('order_jakarta', $data3);
    }

    public function orderKelas4()
    {
        $data = [
            'nama_siswa' => ($this->input->post('name_siswa', true)),
            'nama_ortu' => ($this->input->post('nama_ortu', true)),
            'jenis_kelamin' => ($this->input->post('jk', true)),
            'usia' => ($this->input->post('usia', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah', true)),
            'telepon' => ($this->input->post('telepon', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal', true)),
            'nama_kolam' => ($this->input->post('kolam', true)),
            'nama_kelas' => ($this->input->post('kelas', true)),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];

        $this->db->insert('order_jakarta', $data);

        $data1 = [
            'nama_siswa' => ($this->input->post('name_siswa1', true)),
            'nama_ortu' => ($this->input->post('nama_ortu1', true)),
            'jenis_kelamin' => ($this->input->post('jk1', true)),
            'usia' => ($this->input->post('usia1', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah1', true)),
            'telepon' => ($this->input->post('telepon1', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal1', true)),
            'nama_kolam' => ($this->input->post('kolam1', true)),
            'nama_kelas' => ($this->input->post('kelas1', true)),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];

        $this->db->insert('order_jakarta', $data1);

        $data2 = [
            'nama_siswa' => ($this->input->post('name_siswa2', true)),
            'nama_ortu' => ($this->input->post('nama_ortu2', true)),
            'jenis_kelamin' => ($this->input->post('jk2', true)),
            'usia' => ($this->input->post('usia2', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah2', true)),
            'telepon' => ($this->input->post('telepon2', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal2', true)),
            'nama_kolam' => ($this->input->post('kolam2', true)),
            'nama_kelas' => ($this->input->post('kelas2')),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];
        $this->db->insert('order_jakarta', $data2);

        $data3 = [
            'nama_siswa' => ($this->input->post('name_siswa3', true)),
            'nama_ortu' => ($this->input->post('nama_ortu3', true)),
            'jenis_kelamin' => ($this->input->post('jk3', true)),
            'usia' => ($this->input->post('usia3', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah3', true)),
            'telepon' => ($this->input->post('telepon3', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal3', true)),
            'nama_kolam' => ($this->input->post('kolam3', true)),
            'nama_kelas' => ($this->input->post('kelas3', true)),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];
        $this->db->insert('order_jakarta', $data3);
    }

    public function hapusDataOrder($id)
    {
        $this->db->delete('order_jakarta', ['id' => $id]);
    }

    public function editDataOrder()
    {
        $data = [
            "nama_siswa" => ($this->input->post('name', true)),
            "nama_ortu" => ($this->input->post('nama_orang_tua', true)),
            "jenis_kelamin" => ($this->input->post('jenis_kelamin', true)),
            "usia" => ($this->input->post('usia', true)),
            "nama_sekolah" => ($this->input->post('nama_sekolah', true)),
            "telepon" => ($this->input->post('telepon', true)),
            "alamat-tinggal" => ($this->input->post('alamat', true)),
            "nama_kolam" => ($this->input->post('nama_kolam', true)),
            "nama_kelas" => ($this->input->post('nama_kelas', true)),
            "pelatih" => ($this->input->post('nama_pelatih', true)),
            "status" => ($this->input->post('status_bayar', true))
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('order_jakarta', $data);
    }

    public function tambahOrder()
    {

        $data = [
            'nama_siswa' => ($this->input->post('name_siswa', true)),
            'nama_ortu' => ($this->input->post('nama_ortu', true)),
            'jenis_kelamin' => ($this->input->post('jk', true)),
            'usia' => ($this->input->post('usia', true)),
            'nama_sekolah' => ($this->input->post('nama_sekolah', true)),
            'telepon' => ($this->input->post('telepon', true)),
            'alamat-tinggal' => ($this->input->post('alamat_tinggal', true)),
            'nama_kolam' => ($this->input->post('kolam', true)),
            'nama_kelas' => ($this->input->post('kelas')),
            'pelatih' => 'belum ada pelatih',
            'status' => 'Belum Bayar',
            'date_created' => time()
        ];

        $this->db->insert('order_jakarta', $data);
    }
}
