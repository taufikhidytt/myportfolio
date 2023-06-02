<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Medsos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Medsos_model', 'Medsos');
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
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'My Portfolio | Media Sosial';
        $data['judul'] = 'Media Sosial';
        $data['medsos'] = $this->Medsos->getData();
        $this->template->load('admin/template', 'admin/medsos/index', $data);
    }

    public function add()
    {
        $data['title'] = 'My Portfolio | Media Sosial | Add Media Sosial';
        $data['judul'] = 'Add Media Sosial';
        $this->template->load('admin/template', 'admin/medsos/tambah', $data);
    }

    public function addProcess()
    {
        $this->form_validation->set_rules('link', 'Link Medsos', 'trim|required');
        $this->form_validation->set_rules('icon', 'Icon Medsos', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->add();
        } else {
            $pos = $this->input->post(null, true);
            $this->Medsos->add($pos);
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Success!!</strong> Selamat Anda Berhasil Menambahkan Data Baru!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('admin/medsos');
            }else{
                $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Failed!!</strong> Anda Gagal Menambahkan Data Baru, Sedang Gangguan Server Silahkan Coba Lagi Nanti!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('admin/medsos');
            }
        }
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules('link', 'Link Medsos', 'trim|required');
        $this->form_validation->set_rules('icon', 'Icon Medsos', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->Medsos->getData($id);
            if($query->num_rows() > 0){
                $data['title'] = 'My Portfolio | Media Sosial | Ubah Media Sosial';
                $data['judul'] = 'Ubah Media Sosial';
                $data['medsos'] = $query->row();
                $this->template->load('admin/template', 'admin/medsos/ubah', $data);
            }else{
                $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Warning!!</strong> Data Tidak Di Temukan, Silahkan Cari Data Yang Tersedia!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('admin/medsos');
            }
        } else {
            $pos = $this->input->post(null, true);
            $this->Medsos->update($pos);
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Success!!</strong> Selamat Anda Berhasil Mengupdate Data!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('admin/medsos');
            }else{
                $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Failed!!</strong> Anda Gagal Mengupate Data, Sedang Gangguan Server Silahkan Coba Lagi Nanti!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('admin/medsos');
            }
        }
    }

    public function hapus($id)
    {
        $this->Medsos->hapus($id);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('pesan', 
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>Success!!</strong> Selamat Anda Berhasil Menghapus Data Ini!</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/medsos');
        }else{
            $this->session->set_flashdata('pesan', 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>Failed!!</strong> Anda Gagal Menghapus Data Ini, Sedang Gangguan Server Silahkan Coba Lagi Nanti!</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/medsos');
        }
    }
}
?>