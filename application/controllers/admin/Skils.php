<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Skils extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Skils_model', 'Skils');
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
        $data['title'] = 'My Portfolio | Skils';
        $data['judul'] = 'Skils';
        $data['skils'] = $this->Skils->getData();
        $this->template->load('admin/template', 'admin/skils/index', $data);
    }

    public function add()
    {
        $data['title'] = 'My Portfolio | Skils | Tambah Skils';
        $data['judul'] = 'Tambah Skils';
        $this->template->load('admin/template', 'admin/skils/tambah', $data);
    }

    public function addProcess()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('persentase', 'Persentase', 'trim|required|numeric|is_natural|less_than[101]');
        
        if ($this->form_validation->run() == FALSE) {
            $this->add();
        } else {
            $pos = $this->input->post(null, true);
            $this->Skils->insert($pos);
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
                redirect('admin/skils');
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
                redirect('admin/skils');
            }
        }
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('persentase', 'Persentase', 'trim|required|numeric|is_natural|less_than[101]');
        
        if ($this->form_validation->run() == FALSE) {
            $query = $this->Skils->getData($id);
            if($query->num_rows() > 0){
                $result = $query->row();
                $data['title'] = 'My Portfolio | Skils | Update Skils';
                $data['judul'] = 'Update Skils';
                $data['skils'] = $result;
                $this->template->load('admin/template', 'admin/skils/ubah', $data);
            }else{
                $this->session->set_flashdata('pesan',
                    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Warning!!</strong> Data Tidak Tersedia, Silahkan Cari Data Yang Sudah Di Sediakan !!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('admin/skils');
            }
        } else {
            $pos = $this->input->post(null, true);
            $this->Skils->update($pos);
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
                redirect('admin/skils');
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
                redirect('admin/skils');
            }
        }
        
    }

    public function hapus($id)
    {
        $this->Skils->hapus($id);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('pesan', 
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>Success!!</strong> Selamat Anda Berhasil Menghapus Data Ini!!</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/skils');
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
            redirect('admin/skils');
        }
    }
}
?>