<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Jabatan_model');
        $this->load->model('ModelPelatih');
        is_logged_in();
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dashboard';

        $this->load->model('Siswa_model', 'siswa');
        $data['jumlah_siswa'] = $this->siswa->CountAllOrder();

        $this->load->model('ModelPelatih', 'pelatih');
        $data['jumlah_pelatih'] = $this->pelatih->JumlahPelatih();

        $this->load->model('modelKeuangan');
        $data['jumlah'] =  $this->modelKeuangan->jumlahTransaksi();

        $this->load->model('modelKeuangan');
        $data['pengeluaran'] =  $this->modelKeuangan->jumlahPengeluaran();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function role()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rol'] = $this->db->get('user_rol')->result_array();

        $data['title'] = 'User Role';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer', $data);
    }

    public function roleAccess($rol_id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rol'] = $this->db->get_where('user_rol', ['id' => $rol_id])->row_array();
        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $data['title'] = 'Role Akses';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer', $data);
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $rol_id = $this->input->post('rolId');

        $data = [
            'rol_id' => $rol_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >Akses Berhasil</div>');
    }


    // Method Siswa

    public function dataSiswa()
    {
        $data['title'] = 'Data Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->db->get('data_siswa')->result_array();
        if ($this->input->post('keyword')) {
            $data['siswa'] = $this->Siswa_model->cariDataSiswa();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/data_siswa', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambahDataSiswa()
    {
        $data['title'] = 'Tambah Data Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->db->get('data_siswa')->result_array();
        $data['produk'] = $this->Siswa_model->get_nama_produk();

        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('orang_tua', 'Nama Orang Tua', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('usia', 'Usia', 'required|trim|numeric', [
            'required' => 'Form ini wajib di isi',
            'numeric' => 'Isi dengan nomor'
        ]);
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim|numeric', [
            'required' => 'Form ini wajib di isi',
            'numeric' => 'Isi dengan nomor'
        ]);
        $this->form_validation->set_rules('tanggal_bayar', 'Tanggal Bayar', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('nama_paket', 'Nama Paket', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('harga', 'jharga', 'required|trim', [
            'required' => 'Form ini wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/siswa/tambah_data_siswa', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->load->model('Siswa_model');
            $this->Siswa_model->tambahDataSiswa();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Data Siswa berhasil di Tambah</div>');
            redirect('admin/dataSiswa');
        }
    }

    public function detailSiswa($id_siswa)
    {
        $data['title'] = 'Detail Data Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Siswa_model->detail_siswa($id_siswa);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/siswa/detail', $data);
            $this->load->view('templates/footer', $data);
        } else {
        }
    }

    public function editSiswa($id_siswa)
    {
        $data['title'] = 'Edit Data Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['siswa'] = $this->db->get_where('data_siswa', ['id_siswa' => $id_siswa])->row_array();

        $this->form_validation->set_rules('nama_siswa', 'Nama', 'required|trim',  ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('orang_tua', 'Orang Tua', 'required|trim',  ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim',  ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim',  ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('usia', 'Usia', 'required|trim|numeric',  [
            'required' => 'Form ini Wajib di isi',
            'numeric' => 'Isi dengan Nomor'
        ]);
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required|trim',  ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim',  ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim|numeric',  [
            'required' => 'Form ini Wajib di isi',
            'numeric' => 'Isi dengan Nomor'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/siswa/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->load->model('Siswa_model');
            $this->Siswa_model->editSiswa();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Data Siswa berhasil di Edit</div>');
            redirect('admin/dataSiswa');
        }
    }

    public function hapusDataSiswa($id_siswa)
    {
        $this->load->model('Siswa_model');
        $this->Siswa_model->hapusSiswa($id_siswa);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Data Berhasil di hapus</div>');
        redirect('admin/dataSiswa');
    }

    public function printSiswa()
    {
        $data['title'] = 'Print Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->db->get('data_siswa')->result_array();

        $this->load->view('admin/siswa/print_siswa', $data);
    }

    public function exportExcel()
    {
        $data['title'] = 'Export Excel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->db->get('data_siswa')->result_array();

        $this->load->view('admin/siswa/eksport_excel', $data);
    }

    public function eksportSiswaPdf()
    {
        $this->load->library('dompdf_gen');

        $data['title'] = 'Frint pdf';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->db->get('data_siswa')->result_array();

        $this->load->view('admin/siswa/eksport_pdf', $data);
    }

    // Akhir Method Siswa


    // data absen
    public function dataAbsen()
    {
        $data['title'] = 'Data Absensi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataAbsen'] = $this->ModelPelatih->get_dataAbsen();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pelatih/data_absen', $data);
        $this->load->view('templates/footer', $data);
    }
}
