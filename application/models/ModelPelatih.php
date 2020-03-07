<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelPelatih extends CI_Model
{
    // Data Pelatih
    public function JumlahPelatih()
    {
        return $this->db->get('data_pelatih')->num_rows();
    }

    public function get_data()
    {
        return $this->db->join('data_jabatan', 'data_jabatan.id_jabatan = data_pelatih.id_jabatan', 'left')
            ->get('data_pelatih')->result();
    }

    public function get_data_pelatih()
    {
        $this->db->join('data_jabatan', 'data_jabatan.id_jabatan = data_pelatih.id_jabatan', 'left');
        $this->db->order_by('data_pelatih.kode_pelatih', 'DESC');
        $query = $this->db->get('data_pelatih');
        return $query->result_array();
    }

    public function get_detail_pelatih($id_pelatih)
    {
        $this->db->join('data_jabatan', 'data_jabatan.id_jabatan = data_pelatih.id_jabatan', 'left');
        $this->db->where('data_pelatih.id_pelatih', $id_pelatih);
        $query = $this->db->get('data_pelatih');
        return $query->row_array();
    }

    public function get_data_status()
    {
        return $this->db->join('data_status', 'data_status.id_status = data_pelatih.id_status', 'left')
            ->get('data_pelatih')->result_array();
    }

    public function get_detail_status($id_pelatih)
    {
        $this->db->join('data_status', 'data_status.id_status = data_pelatih.id_status', 'left');

        $this->db->join('data_jabatan', 'data_jabatan.id_jabatan = data_pelatih.id_jabatan', 'left');

        $this->db->where('data_pelatih.id_pelatih', $id_pelatih);
        $query = $this->db->get('data_pelatih');
        return $query->row_array();
    }

    public function get_status()
    {
        return $this->db->get('data_status')->result_array();
    }


    public function get_jabatan()
    {
        return $this->db->get('data_jabatan')->result_array();
    }

    public function tambahDataPelatih()
    {
        $data = [
            'kode_pelatih' => ($this->input->post('kd_pelatih', true)),
            'nik' => ($this->input->post('nik', true)),
            'nama' => ($this->input->post('nama', true)),
            'npwp' => ($this->input->post('npwp', true)),
            'jenis_kelamin' => ($this->input->post('jenis_kelamin', true)),
            'agama' => ($this->input->post('agama', true)),
            'id_jabatan' => ($this->input->post('jabatan', true)),
            'ttl' => ($this->input->post('ttl', true)),
            'kewarganegaraan' => ($this->input->post('kewarganegaraan', true)),
            'id_status' => ($this->input->post('status', true)),
            'agama' => ($this->input->post('agama', true)),
            'alamat' => ($this->input->post('alamat', true)),
            'kabupaten' => ($this->input->post('kabupaten', true)),
            'provinsi' => ($this->input->post('provinsi', true)),
            'kode_pos' => ($this->input->post('kode_pos', true)),
            'telepon' => ($this->input->post('telepon', true))
        ];

        $this->db->insert('data_pelatih', $data);
    }

    public function editPelatih()
    {
        $data = [
            'kode_pelatih' => ($this->input->post('kd_pelatih', true)),
            'nik' => ($this->input->post('nik', true)),
            'nama' => ($this->input->post('nama', true)),
            'npwp' => ($this->input->post('npwp', true)),
            'jenis_kelamin' => ($this->input->post('jenis_kelamin', true)),
            'id_jabatan' => ($this->input->post('jabatan', true)),
            'ttl' => ($this->input->post('ttl', true)),
            'kewarganegaraan' => ($this->input->post('kewarganegaraan', true)),
            'id_status' => ($this->input->post('status', true)),
            'agama' => ($this->input->post('agama', true)),
            'alamat' => ($this->input->post('alamat', true)),
            'kabupaten' => ($this->input->post('kabupaten', true)),
            'provinsi' => ($this->input->post('provinsi', true)),
            'kode_pos' => ($this->input->post('kode_pos', true)),
            'telepon' => ($this->input->post('telepon', true))
        ];

        $this->db->where('id_pelatih', $this->input->post('id_pelatih'));
        $this->db->update('data_pelatih', $data);
    }

    public function hapusDataPelatih($id_pelatih)
    {
        $this->db->delete('data_pelatih', ['id_pelatih' => $id_pelatih]);
    }

    public function cariDataPelatih()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_pelatih', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->join('data_jabatan', 'data_jabatan.id_jabatan = data_pelatih.id_jabatan', 'left');
        return $this->db->get('data_pelatih')->result_array();
    }

    // Akhir Data Pelatih

    // Rekapan Pelatih

    public function ambil_dataPelatih()
    {
        return $this->db->join('data_pelatih', 'data_pelatih.id_pelatih = data_rekapan.id_rekapan', 'left')
            ->get('data_rekapan')->result_array();
    }

    public function tambahDataRekapan()
    {
        $periode = $this->input->post('periode');
        $kode_pelatih = $this->input->post('kode_pelatih');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $biaya_melatih = $this->input->post('biaya_melatih');
        $jumlah_melatih = $this->input->post('jml_melatih');

        $data = array(
            'periode' => $periode,
            'kode_pelatih' => $kode_pelatih,
            'nama' => $nama,
            'jabatan' => $jabatan,
            'biaya_melatih' => $biaya_melatih,
            'jumlah_melatih' => $jumlah_melatih,
            'gaji_melatih' => $biaya_melatih * $jumlah_melatih,
            'status' => 'Belum Dihitung'
        );

        $this->db->insert('data_rekapan', $data);
    }

    public function editDataRekapan()
    {
        $data = [
            'periode' => ($this->input->post('periode')),
            'kode_pelatih' => ($this->input->post('kode_pelatih')),
            'nama' => ($this->input->post('nama')),
            'jabatan' => ($this->input->post('jabatan')),
            'jumlah_melatih' => ($this->input->post('jml_melatih'))
        ];

        $this->db->where('id_rekapan', $this->input->post('id_rekapan'));
        $this->db->update('data_rekapan', $data);
    }

    public function hapusRekapanPelatih($id)
    {
        $this->db->delete('data_rekapan', ['id_rekapan' => $id]);
    }

    public function get_pelatih()
    {
        return $this->db->get('data_pelatih')->result_array();
    }

    public function insert_rekap($data)
    {
        return $this->db->insert('data_rekapan', $data);
    }

    public function get_data_rekapan()
    {
        return $this->db->get('data_rekapan')->result_array();
    }

    public function get_biayaMelatih()
    {
        return $this->db->get('master_biaya')->result_array();
    }

    // hitung Absen

    public function get_dataAbsen()
    {
        return $this->db->get('data_absen')->result_array();
    }

    public function tambahDataAbsen()
    {
        $periode = $this->input->post('periode');
        $kode_pelatih =  $this->input->post('kode_pelatih');
        $nama = $this->input->post('nama');
        $kehadiran = $this->input->post('jml_absen');
        $biaya_absen = $kehadiran * 15000;
        $jumlah_rekapan = $this->input->post('rekapan');
        $gaji_melatih = $jumlah_rekapan * 135000;

        $data = array(
            'periode' => $periode,
            'kode_pelatih' => $kode_pelatih,
            'nama' => $nama,
            'kehadiran' => $kehadiran,
            'biaya_absen' => $biaya_absen,
            'jumlah_rekapan' => $jumlah_rekapan,
            'gaji_melatih' => $gaji_melatih
        );

        $this->db->insert('data_absen', $data);
    }



    public function getId()
    {
        return $this->db->insert_id();
    }

    public function get_data_absen($get_id)
    {
        return  $this->db->get_where('data_absen', ['id_absen' => $get_id])->row_array();
    }

    public function insert_data_gaji($data)
    {
        return $this->db->insert('data_gaji', $data);
    }


    // Hitung gaji

    public function get_data_jabatan()
    {
        return $this->db->get('data_jabatan')->result_array();
    }



    public function dataGaji()
    {
        $this->db->join('data_pelatih', 'data_pelatih.id_pelatih = data_gaji.id_pelatih', 'left');

        $this->db->join('data_absen', 'data_absen.id_absen  = data_gaji.id_absen', 'left');

        $this->db->join('data_jabatan', 'data_jabatan.id_jabatan = data_gaji.id_jabatan', 'left');

        $this->db->join('data_status_gaji', 'data_status_gaji.id_status_gaji = data_gaji.id_status_gaji', 'left');

        $query = $this->db->get('data_gaji');
        return $query->result_array();
    }

    public function detail_gaji($id_gaji)
    {
        $this->db->join('data_pelatih', 'data_pelatih.id_pelatih = data_gaji.id_pelatih', 'left');

        $this->db->join('data_absen', 'data_absen.id_absen  = data_gaji.id_absen', 'left');

        $this->db->join('data_jabatan', 'data_jabatan.id_jabatan = data_gaji.id_jabatan', 'left');

        $this->db->join('data_status_gaji', 'data_status_gaji.id_status_gaji = data_gaji.id_status_gaji', 'left');

        $this->db->where('data_gaji.id_gaji', $id_gaji);
        $query = $this->db->get('data_gaji');
        return $query->row_array();
    }

    // Akhir hitung gaji

    // revisi

    public function getIdPelatih($kode_pelatih)
    {

        return $this->db->get_where('data_pelatih', ['kode_pelatih' => $kode_pelatih])->row_array();

        // return $this->db
        //     ->join('data_pelatih', 'data_pelatih.id_jabatan = data_jabatan.id_jabatan', 'left')
        //     ->get_where('data_pelatih', ['kode_pelatih' => $kode_pelatih])->row_array();
    }



    public function get_absen($jumlah_biaya)
    {
        return $this->db->get_where('data_absen', ['jmlah_biaya' => $jumlah_biaya])->row_array();
    }

    public function getDAtaJabatan($kode_pelatih)
    {
        return $this->db->join('data_pelatih', 'data_pelatih.id_jabatan = data_jabatan.id_jabatan', 'left')
            ->get_where('data_jabatan', ['data_pelatih.kode_pelatih' => $kode_pelatih])->row_array();
    }

    public function get_data_status_pelatih($kode_pelatih)
    {
        return $this->db->join('data_pelatih', 'data_pelatih.id_status = data_status.id_status', 'left')
            ->get_where('data_status', ['data_pelatih.kode_pelatih' => $kode_pelatih])->row_array();
    }

    public function getDataRekapan($gaji_melatih)
    {
        return $this->db->get_where('data_rekapan', ['gaji_melatih' => $gaji_melatih])->row_array();
    }

    public function getDataGaji()
    {
        // return $this->db->get_where('data_gaji', ['id_gaji' => $id_gaji])->result_array();
        return $this->db->get('data_gaji')->result_array();
    }

    public function get_ptkp($id_ptkp)
    {
        return $this->db->get_where('data_status', ['id_status' => $id_ptkp])->result_array();
    }

    public function dataGajiTahunan()
    {
        $this->db->join('data_pelatih', 'data_pelatih.id_pelatih = data_gaji.id_pelatih', 'left');

        $this->db->join('data_absen', 'data_absen.id_absen  = data_gaji.id_absen', 'left');

        $this->db->join('data_jabatan', 'data_jabatan.id_jabatan = data_gaji.id_jabatan', 'left');

        $this->db->where('data_gaji.kode_pelatih');
        $query = $this->db->sum('data_gaji');
        return $query->result_array();
    }

    public function gajiTahunan()
    {
        return $this->db->select('nama.kode_pelatih,sum(gaji_bruto) as status')
            ->order_by('gaji_brotu', 'ASC')
            ->where('month(month(gaji_bruto) = month(CURRENT_date)')
            ->get()->result_array();
    }

    public function jumlahGaji()
    {
        $this->db->select('data_gaji.status_kawin,data_gaji.ptkp,data_gaji.nama_jabatan,data_pelatih.npwp,data_pelatih.id_jabatan,data_pelatih.id_status,data_pelatih.nama,data_absen.kode_pelatih,data_absen.periode,sum(data_gaji.gaji_bruto) as total');
        $this->db->from('data_gaji');
        $this->db->join('data_absen', 'data_absen.id_absen  = data_gaji.id_absen', 'left');
        $this->db->join('data_pelatih', 'data_pelatih.id_pelatih = data_gaji.id_pelatih', 'left ');
        $this->db->join('data_status', 'data_status.id_status = data_gaji.id_status', 'left');
        // $this->db->where('MONTH(data_absen.periode) = MONTH(CURRENT_date)');
        $this->db->where('YEAR(data_absen.periode) = YEAR(CURRENT_date)');
        $this->db->order_by('data_gaji.gaji_bruto', 'ASC');
        $this->db->group_by('data_absen.kode_pelatih');

        // return $this->db->get('data_siswa')->num_fields();
        // $sql = "SELECT SUM(gaji_bruto) AS jumlah FROM data_gaji WHERE MONTH(gaji_bruto) ";
        // $result = $this->db->query($sql);
        // return $result->row()->jumlah;

        $query = $this->db->get();
        return $query->result_array();
    }

    public function edit_status()
    {
        return $this->db->get('data_status')->result_array();
    }
}
