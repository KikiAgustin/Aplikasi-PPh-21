<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelKeuangan extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function tambahTransaksi()
    {
        $data = [
            'tanggal_bayar' => ($this->input->post('tanggal_bayar', true)),
            'nama_siswa' => ($this->input->post('nama_pengirim', true)),
            'jumlah' => ($this->input->post('jumlah', true)),
            'keterangan' => ($this->input->post('keterangan', true))
        ];

        $this->db->insert('data_siswa', $data);
    }


    public function jumlahTransaksi()
    {
        // return $this->db->get('data_siswa')->num_fields();
        $sql = "SELECT SUM(jumlah) AS jumlah FROM data_siswa";
        $result = $this->db->query($sql);
        return $result->row()->jumlah;
    }

    public function jumlahPengeluaran()
    {
        $sql = "SELECT SUM(gaji_bersih) AS gaji_bersih FROM data_gaji";
        $result = $this->db->query($sql);
        return $result->row()->gaji_bersih;
    }

    public function ubah_status_rekapan()
    {

        $status = $this->input->post('status');
        $data = array(
            'status' => $status
        );

        $this->db->where('id_rekapan', $this->input->post('id_rekapan'));
        $this->db->update('data_rekapan', $data);
    }

    // hitung gaji
    public function hitung_gaji()
    {
        $periode = $this->input->post('periode');
        $kode_pelatih = $this->input->post('kode_pelatih');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $jumlah_melatih = $this->input->post('jml_melatih');
        $gaji_melatih = $this->input->post('gaji_melatih');
        $tunjangan = $this->input->post('tunjangan');
        $gaji_pokok = $this->input->post('gaji_pokok');
        $gaji_bruto = $gaji_melatih + $gaji_pokok + $tunjangan;
        $pph = $gaji_bruto * 0.02;
        $gaji_bersih = $gaji_bruto - $pph;

        $data = array(
            'periode' => $periode,
            'kode_pelatih' => $kode_pelatih,
            'nama' => $nama,
            'jabatan' => $jabatan,
            'jumlah_melatih' => $jumlah_melatih,
            'gaji_melatih' => $gaji_melatih,
            'gaji_pokok' => $gaji_pokok,
            'tunjangan' => $tunjangan,
            'gaji_bruto' => $gaji_bruto,
            'pph' => $pph,
            'gaji_bersih' => $gaji_bersih,
            'status' => 'Belum di Terima'
        );

        $this->db->insert('data_gaji', $data);
    }

    public function ubah_status_gaji()
    {
        $status = $this->input->post('verifikasi');
        $data = array(
            'id_status_gaji' => $status
        );

        $this->db->where('id_gaji', $this->input->post('id_gaji'));
        $this->db->update('data_gaji', $data);
    }

    public function dataGaji()
    {
        return $this->db->get('data_gaji')->result_array();
    }

    public function dataGajiTahunan()
    {
        return $this->db->get('data_gaji_pertahun')->result_array();
    }

    public function tambahPelatih()
    {
        $kode_pelatih = $this->input->post('kode_pelatih');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $status =  $this->input->post('status');
        $npwp = $this->input->post('npwp');

        $data = array(
            'kode_pelatih' => $kode_pelatih,
            'nama' => $nama,
            'jabatan' => $jabatan,
            'status' => $status,
            'npwp' => $npwp,
            'januari' =>  0,
            'februari' => 0,
            'maret' => 0,
            'april' => 0,
            'mei' => 0,
            'juni' => 0,
            'juli' => 0,
            'agustus' => 0,
            'september' => 0,
            'oktober' => 0,
            'november' => 0,
            'desember' => 0,
            'jumlah' => 0
        );

        $this->db->insert('data_gaji_pertahun', $data);
    }

    public function insert_gaji_pertahun()
    {
        $kode_pelatih = $this->input->post('kode_pelatih');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $januari = $this->input->post('januari');
        $februari = $this->input->post('februari');
        $maret = $this->input->post('maret');
        $april =  $this->input->post('april');
        $mei = $this->input->post('mei');
        $juni = $this->input->post('juni');
        $juli = $this->input->post('juli');
        $agustus = $this->input->post('agustus');
        $september = $this->input->post('september');
        $oktober = $this->input->post('oktober');
        $november = $this->input->post('november');
        $desember = $this->input->post('desember');
        $jumlah = $januari + $februari + $maret + $april +  $mei + $juni + $juli + $agustus + $september + $oktober + $november + $desember;

        $data = array(
            'kode_pelatih' => $kode_pelatih,
            'nama' => $nama,
            'jabatan' => $jabatan,
            'januari' =>  $januari,
            'februari' => $februari,
            'maret' => $maret,
            'april' => $april,
            'mei' => $mei,
            'juni' => $juni,
            'juli' => $juli,
            'agustus' => $agustus,
            'september' => $september,
            'oktober' => $oktober,
            'november' => $november,
            'desember' => $desember,
            'jumlah' => $jumlah
        );

        $this->db->where('id_gaji_pertahun', $this->input->post('id_gaji_pertahun'));
        $this->db->update('data_gaji_pertahun', $data);
    }

    // hitung PPh
    public function get_ptkp()
    {
        return $this->db->get('data_ptkp')->result_array();
    }

    public function hitungPPh21()
    {
        $kode_pelatih = $this->input->post('kode_pelatih');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $status = $this->input->post('status');
        $npwp = $this->input->post('npwp');
        $jumlah = $this->input->post('jumlah');
        $ptkp = $this->input->post('ptkp');
        $pkp = $jumlah - $ptkp;
        $potongan = $this->input->post('statusNPWP');
        $pph21 = $pkp * $potongan;

        $data = array(
            'kode_pelatih' => $kode_pelatih,
            'nama' => $nama,
            'jabatan' => $jabatan,
            'status' => $status,
            'npwp' => $npwp,
            'gaji_netto' => $jumlah,
            'ptkp' => $ptkp,
            'pkp' => $pkp,
            'potongan' => $potongan,
            'pph21' => $pph21
        );

        $this->db->insert('data_pph21', $data);
    }

    public function dataPPh()
    {
        return $this->db->get('data_pph21')->result_array();
    }

    public function update_konfirmasi($id_siswa, $data)
    {
        $this->db->where('id_siswa', $id_siswa);
        $this->db->update('data_siswa', $data);
    }

    public function getDataKonfirmasi($id_konfirmasi, $id_siswa)
    {

        return $this->db->get_where('data_siswa', [
            'id_konfirmasi' => $id_konfirmasi,
            'id_siswa' => $id_siswa
        ])->row_array();
    }

    // akhir hitung PPh

    // Laporan

    public function laporanGaji()
    {
        return $this->db->get('data_gaji')->result_array();
    }

    public function laporanPPh()
    {
        return $this->db->get('data_pph21')->result_array();
    }

    // Akhir laporan



    // Revisi abis -abisan

    // Verifikasi pembayaran
    public function verifikasi_siswa()
    {
        return $this->db->get('data_konfirmasi')->result_array();
    }
    public function verifikasi_pembayaran()
    {

        $verifikasi =  $this->input->post('verifikasi');

        $data = array(

            'id_konfirmasi' => $verifikasi
        );

        $this->db->where('id_siswa', $this->input->post('id_siswa'));
        $this->db->update('data_siswa', $data);
    }

    public function verifikasi_gaji()
    {
        return $this->db->get('data_status_gaji')->result_array();
    }
}
