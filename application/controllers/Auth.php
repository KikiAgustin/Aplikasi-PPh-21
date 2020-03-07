<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('admin');
        }

        // Aturan untuk Login
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Wajib di isi',
            'valid_email' => 'Email tidak valid'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Masuk';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('templates/auth_footer', $data);
        } else {
            // jika validasi lolos
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // Jika user ada
        if ($user) {
            // Jika user aktif
            if ($user['is_active'] == 1) {
                // Cek password yang di inputkan user
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'rol_id' => $user['rol_id']
                    ];

                    $this->session->set_userdata($user);
                    if ($user['rol_id'] == 1) {
                        redirect('admin');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" > Password yang anda masukan salah</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" > Email ini belum teraktivasi</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >Email belum terdaftar</div>');
            redirect('auth');
        }
    }

    public function registration()
    {

        if ($this->session->userdata('email')) {
            redirect('admin');
        }

        // Aturan Untuk registrasi
        $this->form_validation->set_rules('name', 'Name', 'required|trim', ['required' => 'Wajib di isi']);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => 'Wajid di isi',
            'valid_email' => 'Masukan email yang benar',
            'is_unique' => 'Email sudah Terdaftar! Silahkan isi yang lain'
        ]);
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', [
            'required' => 'Wajib di isi',
            'matches' => 'Password tidak sama',
            'min_length' => 'Minimal 3 Karakter'
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi Akun';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration', $data);
            $this->load->view('templates/auth_footer', $data);
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'rol_id' => 1,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Selamat anda berhasil Registrasi. Silahkan Masuk</div>');
            redirect('auth');
        }
    }


    // Logout
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('rol_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Anda berhasil keluar</div>');
        redirect('auth');
    }

    // halaman blocked

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }

    public function coba()
    {
        $data['title'] = 'Halaman Login';
        $this->load->view('auth/reg', $data);
    }
}
