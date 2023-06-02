<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') == null){
            $this->session->set_flashdata('pesan', 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>Failed!!</strong> Anda Belum Login, Silahkan Login Terlebih Dahulu.!</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('login', true);
        }
    }

    public function index()
    {
        $portfolio          = $this->db->query("SELECT * FROM portfolio");
        $skils              = $this->db->query("SELECT * FROM skils");
        $experiance         = $this->db->query("SELECT * FROM experience");
        $blogs              = $this->db->query("SELECT * FROM blog");
        $data['portfolio']  = $portfolio->num_rows();
        $data['skils']      = $skils->num_rows();
        $data['experience'] = $experiance->num_rows();
        $data['blogs']      = $blogs->num_rows();
        $data['title']      = 'My Portfolio | Dashboard';
        $data['judul']      = 'Dashboard';
        $this->template->load('admin/template', 'admin/dashboard', $data);
    }
}
?>