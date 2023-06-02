<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'Login');
    }

    public function index()
    {
        if($this->session->userdata('status') == 'active'){
            $this->session->set_flashdata('pesan', 
                '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>Warning!!</strong> Silahkan Gunakan Tombol Logout Untuk Keluar Dari Menu Admin!!</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );    
            redirect('admin/dashboard', true);
        }
        $data['title'] = 'Sign In My Portfolio';
        $this->load->view('login', $data);
    }

    public function cek_login()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
        
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $pos = $this->input->post(null, true);
            $cek = $this->Login->cek_login($pos);
            if($cek == false){
                $this->session->set_flashdata('pesan',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Failed!!</strong> Gagal Login Silahkan Cek Kembali Username Dan Password Anda Kembali!!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('login');
            }else{
                $newsession = array(
                        'username'  => $cek->username,
                        'status'     => $cek->status,
                );

                $this->session->set_userdata($newsession);
                $this->session->set_flashdata('pesan',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Success!!</strong> Selamat Anda Berhasil Log In Di My Portfolio, Buatlah Sesuatu Yang Bermanfaat.!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('admin/dashboard');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('status');
        $this->session->set_flashdata('pesan',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Success!!</strong> Selamat Anda Berhasil Logout Di My Portfolio, Semoga Harimu Menyenangkan!</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );
        redirect('login');
    }
}
?>