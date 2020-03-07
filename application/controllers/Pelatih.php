<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelatih extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelPelatih');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Data Pelatih';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pelatih'] = $this->ModelPelatih->get_data_pelatih();

        if ($this->input->post('keyword')) {
            $data['pelatih'] = $this->ModelPelatih->cariDataPelatih();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/pelatih/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambahDataPelatih()
    {
        $data['title'] = 'Tambah data pelatih';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pelatih'] = $this->db->get('data_pelatih')->result_array();
        $data['jabatan'] = $this->ModelPelatih->get_jabatan();
        $data['status'] = $this->ModelPelatih->get_status();

        $this->form_validation->set_rules('kd_pelatih', 'kode pelatih', 'required|trim|numeric', [
            'required' => 'Form ini wajib di isi',
            'numeric' => 'Isi dengan Nomor'
        ]);
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|numeric', [
            'required' => 'Form ini wajib di isi',
            'numeric' => 'Isis dengan nomor'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('npwp', 'NPWP', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('ttl', 'TTL', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('status', 'status', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('agama', 'agama', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('kabupaten', 'kabupaten', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('provinsi', 'provinsi', 'required|trim', ['required' => 'Form ini wajib di isi']);
        $this->form_validation->set_rules('kode_pos', 'kode_pos', 'required|trim|numeric', [
            'required' => 'Form ini wajib di isi',
            'numeric' => 'Isi dengan nomor'
        ]);
        $this->form_validation->set_rules('telepon', 'telepon', 'required|trim|numeric', [
            'required' => 'Form ini wajib di isi',
            'numeric' => 'Isi dengan nomor'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/pelatih/tambah_data', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->load->model('ModelPelatih');
            $this->ModelPelatih->tambahDataPelatih();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Data pelatih berhasil di Tambah</div>');
            redirect('pelatih');
        }
    }

    public function detailPelatih($id_pelatih)
    {
        $data['title'] = 'Detail data pelatih';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jabatan'] = $this->ModelPelatih->get_detail_pelatih($id_pelatih);
        $data['status'] = $this->ModelPelatih->get_detail_status($id_pelatih);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pelatih/detail_pelatih', $data);
        $this->load->view('templates/footer', $data);
    }

    public function editPelatih($id_pelatih)
    {
        $data['title'] = 'Edit data pelatih';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pelatih'] = $this->db->get_where('data_pelatih', ['id_pelatih' => $id_pelatih])->row_array();
        $data['jabatan'] = $this->ModelPelatih->get_jabatan();
        $data['status'] = $this->ModelPelatih->get_detail_status($id_pelatih);
        $data['editStatus'] = $this->ModelPelatih->edit_status();



        $this->form_validation->set_rules('kd_pelatih', 'kode pelatih', 'required|trim|numeric', [
            'required' => 'Form ini wajib di isi',
            'numeric' => 'Isi dengan Nomor'
        ]);
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|numeric',   [
            'required' => 'Form ini Wajib di isi',
            'numeric' => 'Isi dengan nomor'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim',   ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('npwp', 'NPWP', 'required|trim',   ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'required|trim',   ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim',   ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('ttl', 'Tanggal Lahir', 'required|trim',   ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required|trim',   ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('status', 'Status', 'required|trim',   ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim',   ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim',   ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required|trim',   ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required|trim',   ['required' => 'Form ini Wajib di isi']);
        $this->form_validation->set_rules('kode_pos', 'kode pos', 'required|trim|numeric',   [
            'required' => 'Form ini Wajib di isi',
            'numeric' => 'Isi dengan nomor'
        ]);
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim|numeric',   [
            'required' => 'Form ini Wajib di isi',
            'numeric' => 'Isi dengan nomor'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/pelatih/edit_pelatih', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->load->model('ModelPelatih');
            $this->ModelPelatih->editPelatih();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Data Pelatih berhasil di Edit</div>');
            redirect('pelatih');
        }
    }

    public function hapusDataPelatih($id_pelatih)
    {
        $this->load->model('ModelPelatih');
        $this->ModelPelatih->hapusDataPelatih($id_pelatih);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Data Berhasil di hapus</div>');
        redirect('pelatih');
    }

    public function printData()
    {
        $data['title'] = 'Print Pelatih';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pelatih'] = $this->db->get('data_pelatih')->result_array();

        $this->load->view('admin/pelatih/print_data', $data);
    }

    public function eksportPelatihPdf()
    {
        $data['title'] = 'Ekspor PDF pelatih';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pelatih'] = $this->db->get('data_pelatih')->result_array();

        $this->load->view('admin/pelatih/eksport_Pdf', $data);
    }

    public function exportExcel()
    {
        $data['title'] = 'Ekspor Excel pelatih';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pelatih'] = $this->db->get('data_pelatih')->result_array();

        $this->load->view('admin/pelatih/eksport_excel', $data);
    }
}
