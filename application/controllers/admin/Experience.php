<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Experience extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Experience_model', 'Experience');
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
        $data['title'] = 'My Portfolio | Experience';
        $data['judul'] = 'Experience';
        $data['experience'] = $this->Experience->getData();
        $this->template->load('admin/template', 'admin/experience/index', $data);
    }

    public function add()
    {
        $data['title'] = 'My Portfolio | Experience | Tambah Experience';
        $data['judul'] = 'Tambah Experience';
        $this->template->load('admin/template', 'admin/experience/tambah', $data);
    }

    public function addProcess()
    {
        $this->form_validation->set_rules('nama', 'Nama Experience', 'trim|required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
        $this->form_validation->set_rules('tahun_mulai', 'Tahun Mulai Experience', 'trim|required|numeric');
        $this->form_validation->set_rules('tahun_akhir', 'Tahun Akhir Experience', 'trim|required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Experience', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->add();
        } else {
            $pos = $this->input->post(null, true);
            $this->Experience->add($pos);
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
                redirect('admin/experience');
            }else{
                $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Failed!!</strong> Anda Gagal Menambah Data, Sedang Ada Gangguan Server!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('admin/experience');
            }
        }
    }

    public function edit($id)
    {   
        $this->form_validation->set_rules('nama', 'Nama Experience', 'trim|required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
        $this->form_validation->set_rules('tahun_mulai', 'Tahun Mulai Experience', 'trim|required|numeric');
        $this->form_validation->set_rules('tahun_akhir', 'Tahun Akhir Experience', 'trim|required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Experience', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $query = $this->Experience->getData($id);
            if($query->num_rows() > 0){
                $result = $query->row();
                $data['title'] = 'My Portfolio | Experience | Update Experience';
                $data['judul'] = 'Update Experience';
                $data['experience'] = $result;
                $this->template->load('admin/template', 'admin/experience/ubah', $data);
            }else{
                $this->session->set_flashdata('pesan',
                    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Warning!!</strong> Data Tidak Ditemukan Silahkan Cari Data Yang Sudah Tersedia!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('admin/experience');
            }
        } else {
            $pos = $this->input->post(null, true);
            $this->Experience->update($pos);
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Success!!</strong> Selamat Anda Berhasil Menupdate Data Ini !!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('admin/experience');
            }else{
                $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Warning!!</strong> Anda Tidak Mengupdate Data, Silahkan Update Beberapa Data !!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('admin/experience');
            }
        }
    }

    public function hapus($id)
    {
        $this->Experience->hapus($id);
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
            redirect('admin/experience');
        }else{
            $this->session->set_flashdata('pesan', 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>Failed!!</strong> Anda Gagal Menghapus Data, Sedang Ada Gangguan Server!</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/experience');
        }
    }
}

?>