<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelPelatih');
        $this->load->model('modelKeuangan');
        $this->load->model('Siswa_model');
        is_logged_in();
    }
    public function index()
    {
    }

    public function Transaksi()
    {
        $data['title'] = 'Data Transaksi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Siswa_model->get_konfirmasi();

        $this->load->model('modelKeuangan');
        $data['jumlah'] =  $this->modelKeuangan->jumlahTransaksi();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('keuangan/transaksi', $data);
        $this->load->view('templates/footer', $data);
    }



    public function konfirmasi()
    {

        $id_siswa = $this->input->post('id_siswa');
        $id_konfirmasi = $this->input->post('id_konfirmasi');
        $siswa = $this->modelKeuangan->getDataKonfirmasi($id_konfirmasi, $id_siswa);

        $id_konf = $siswa['id_konfirmasi'];

        if (intval($id_konf) == 1) {
            $id_k = intval($id_konf) + 1;
        } else if (intval($id_konf) == 2) {
            $id_k = intval($id_konf) - 1;
        }

        $data = array(
            'id_konfirmasi' => $id_k,

        );
        $this->modelKeuangan->update_konfirmasi($id_siswa, $data);
    }

    public function verifikasiPembayaran($id)
    {
        $data['title'] = 'Verifikasi Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->db->get_where('data_siswa', ['id_siswa' => $id])->row_array();
        $data['verifikasi'] = $this->modelKeuangan->verifikasi_siswa();

        $this->form_validation->set_rules('verifikasi', 'Verifikasi', 'required|trim|numeric',  [
            'required' => 'Form ini Wajib di isi',
            'numeric' => 'Pilih Sudah Atau belum'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('keuangan/verifikasi_pembayaran', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->modelKeuangan->verifikasi_pembayaran();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Pembayaran Berhasil di Verifikasi</div>');
            redirect('keuangan/transaksi');
        }
    }

    public function ubahStatusRekapan($id_rekapan)
    {
        $data['title'] = 'Ubah Status Rekapan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rekapan'] = $this->db->get_where('data_rekapan', ['id_rekapan' => $id_rekapan])->row_array();

        $this->form_validation->set_rules('status', 'status', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('keuangan/ubah_status_rekapan', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->modelKeuangan->ubah_status_rekapan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Status rekapan berhasil diubah</div>');
            redirect('keuangan/hitungGaji');
        }
    }

    public function tambahAbsen()
    {
        $data['title'] = 'Tambah Data Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataAbsen'] = $this->ModelPelatih->get_dataAbsen();
        $data['namaPelatih'] = $this->ModelPelatih->get_pelatih();
        $data['biayaMelatih'] = $this->ModelPelatih->get_biayaMelatih();

        $this->form_validation->set_rules('periode', 'Periode', 'required|trim',  ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('kode_pelatih', 'kode_pelatih', 'required|trim',  ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('nama', 'nama', 'required|trim',  ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('jml_absen', 'Jumlah Absen', 'required|trim',  ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('rekapan', 'Rekapan', 'required|trim',  ['required' => 'Form ini Wajib di isi']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/pelatih/tambah_data_absen', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $kode_pelatih = $this->input->post('kode_pelatih', true);
            $pelatih = $this->ModelPelatih->getIdPelatih($kode_pelatih);
            $id_pelatih = $pelatih['id_pelatih'];

            $jabatan = $this->ModelPelatih->getDAtaJabatan($kode_pelatih);
            $id_jabatan = $jabatan['id_jabatan'];
            $gaji_pokok = $jabatan['gaji'];
            $nama_jabatan = $jabatan['nama_jabatan'];

            $status = $this->ModelPelatih->get_data_status_pelatih($kode_pelatih);
            $id_status = $status['id_status'];
            $ptkp = $status['jumlah'];
            $status_kawin = $status['status'];



            $this->ModelPelatih->tambahDataAbsen();
            $get_id = $this->ModelPelatih->getId();
            $get_dataAbsen = $this->ModelPelatih->get_data_absen($get_id);

            $id_absen = $get_dataAbsen['id_absen'];
            $kode_pelatih = $get_dataAbsen['kode_pelatih'];
            $biaya_absen = $get_dataAbsen['biaya_absen'];
            $gaji_melatih = $get_dataAbsen['gaji_melatih'];
            $gaji_bruto = intval($biaya_absen) + intval($gaji_melatih) + intval($gaji_pokok);
            $pph = intval($gaji_bruto) * 0.02;
            $gaji_bersih = intval($gaji_bruto) - intval($pph);

            $data = array(
                'id_pelatih' => $id_pelatih,
                'id_absen' => $id_absen,
                'id_status' => $id_status,
                'id_jabatan' => $id_jabatan,
                'gaji_bruto' => $gaji_bruto,
                'pph' => $pph,
                'gaji_bersih' => $gaji_bersih,
                'nama_jabatan' => $nama_jabatan,
                'status_kawin' => $status_kawin,
                'ptkp' => $ptkp,
                'id_status_gaji  ' => '1'
            );
            $this->ModelPelatih->insert_data_gaji($data);



            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Data Rekapan berhasil di Tambah</div>');
            redirect('admin/dataAbsen');
        }
    }

    public function dataGaji()
    {
        $data['title'] = 'Data Gaji Pelatih';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataGaji'] = $this->ModelPelatih->dataGaji();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('keuangan/data_gaji_bulanan', $data);
        $this->load->view('templates/footer', $data);
    }

    public function detailGaji($id_gaji)
    {
        $data['title'] = 'Struk Gaji Pelatih';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['detailGaji'] = $this->ModelPelatih->detail_gaji($id_gaji);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('keuangan/detail_gaji', $data);
        $this->load->view('templates/footer', $data);
    }

    public function strukGaji($id_gaji)
    {
        $data['title'] = 'Struk Gaji Pelatih';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['detailGaji'] = $this->ModelPelatih->detail_gaji($id_gaji);


        $this->load->view('keuangan/struk_gaji', $data);
    }

    public function ubahStatusGaji($id)
    {
        $data['title'] = 'Ubah Status Gaji';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['statusGaji'] = $this->db->get_where('data_gaji', ['id_gaji' => $id])->row_array();
        $data['status_terima_gaji'] = $this->modelKeuangan->verifikasi_gaji();

        $this->form_validation->set_rules('verifikasi', 'Verifikasi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('keuangan/ubah_status_gaji', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->modelKeuangan->ubah_status_gaji();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Status Gaji berhasil diubah</div>');
            redirect('keuangan/dataGaji');
        }
    }

    public function dataGajiTahunan()
    {
        $data['title'] = 'Data Gaji Pertahun';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataGaji'] = $this->ModelPelatih->jumlahGaji();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('keuangan/data_gaji_tahunan', $data);
        $this->load->view('templates/footer', $data);
    }

    public function hitungPPh()
    {
        $data['title'] = 'Hitung PPh 21';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['gajiTahunan'] = $this->modelKeuangan->dataGajiTahunan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('keuangan/hitung_pph', $data);
        $this->load->view('templates/footer', $data);
    }

    // public function gajiTahunan($id)
    // {
    //     $data['title'] = 'Data Gaji Pertahun';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['detailGaji'] = $this->db->get_where('data_gaji_pertahun', ['id_gaji_pertahun' => $id])->row_array();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('keuangan/gaji_tahunan', $data);
    //     $this->load->view('templates/footer', $data);
    // }

    public function tambahpelatih()
    {
        $data['title'] = 'Tambah Pelatih';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataPelatih'] = $this->ModelPelatih->get_pelatih();

        $this->form_validation->set_rules('kode_pelatih', 'Kode Pelatih', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama Pelatih', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_rules('npwp', 'npwp', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('keuangan/tambah_pelatih', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->modelKeuangan->tambahPelatih();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Data Pelatih berhasil di tambahkan</div>');
            redirect('keuangan/dataGaji');
        }
    }

    public function insertGajiTahunan($id)
    {
        $data['title'] = 'Data Gaji Pertahun';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['insertGaji'] = $this->db->get_where('data_gaji_pertahun', ['id_gaji_pertahun' => $id])->row_array();

        $this->form_validation->set_rules('kode_pelatih', 'Kode Pelatih', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama Pelatih', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('januari', 'januari', 'trim');
        $this->form_validation->set_rules('februari', 'februari', 'trim');
        $this->form_validation->set_rules('maret', 'maret', 'trim');
        $this->form_validation->set_rules('april', 'april', 'trim');
        $this->form_validation->set_rules('mei', 'mei', 'trim');
        $this->form_validation->set_rules('juni', 'juni', 'trim');
        $this->form_validation->set_rules('juli', 'juli', 'trim');
        $this->form_validation->set_rules('agustus', 'agustus', 'trim');
        $this->form_validation->set_rules('september', 'september', 'trim');
        $this->form_validation->set_rules('oktober', 'oktober', 'trim');
        $this->form_validation->set_rules('november', 'november', 'trim');
        $this->form_validation->set_rules('desember', 'desember', 'trim');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('keuangan/insert_gaji_tahunan', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->modelKeuangan->insert_gaji_pertahun();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Gaji Berhasil di tambahkan</div>');
            redirect('keuangan/dataGaji');
        }
    }

    // Akhir Hitung Gaji

    // Hitung PPh 21


    public function aksiHitungPPh($id)
    {
        $data['title'] = 'Hitung PPh 21';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hitungPPh'] = $this->db->get_where('data_gaji_pertahun', ['id_gaji_pertahun' => $id])->row_array();
        $data['ptkp'] = $this->modelKeuangan->get_ptkp();

        $this->form_validation->set_rules('kode_pelatih', 'Kode Pelatih', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama Pelatih', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_rules('npwp', 'npwp', 'trim|required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');
        $this->form_validation->set_rules('ptkp', 'PTKP', 'trim|required');
        $this->form_validation->set_rules('statusNPWP', 'STATUS NPWP', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('keuangan/aksi_hitung_pph', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->modelKeuangan->hitungPPh21();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >PPh 21 Pelatih Berhasil dihitung</div>');
            redirect('keuangan/dataGaji');
        }
    }

    public function dataPPh()
    {
        $data['title'] = 'Data PPh 21';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataPPh'] = $this->modelKeuangan->dataPPh();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('keuangan/data_pph21', $data);
        $this->load->view('templates/footer', $data);
    }

    // Akhir Hitung PPh 21

    // Laporan

    public function laporanGaji()
    {
        $data['title'] = 'Laporan Data Gaji';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataGaji'] = $this->ModelPelatih->dataGaji();

        $this->load->view('keuangan/laporan_gaji', $data);
    }

    public function excelDataGaji()
    {
        $data['title'] = 'Laporan Data Gaji';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['laporanGaji'] = $this->modelKeuangan->laporanGaji();

        $this->load->view('keuangan/excel_data_gaji', $data);
    }

    public function pdfDataGaji()
    {
        $data['title'] = 'Laporan Data Gaji';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['laporanGaji'] = $this->modelKeuangan->laporanGaji();

        $this->load->view('keuangan/pdf_data_gaji', $data);
    }

    public function laporanPPh21()
    {
        $data['title'] = 'Laporan Data PPh 21';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['laporanPPh21'] = $this->modelKeuangan->laporanPPh();
        $data['dataGaji'] = $this->ModelPelatih->jumlahGaji();

        $this->load->view('keuangan/laporan_pph_21', $data);
    }

    public function excelPPh21()
    {
        $data['title'] = 'Laporan Data PPh 21';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['laporanPPh21'] = $this->modelKeuangan->laporanPPh();

        $this->load->view('keuangan/excel_pph', $data);
    }

    public function pdfPPh21()
    {
        $data['title'] = 'Laporan Data PPh 21';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['laporanPPh21'] = $this->modelKeuangan->laporanPPh();

        $this->load->view('keuangan/pdf_pph', $data);
    }

    // Akhir Laporan

}
