<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Portfolio_model', 'Portfolio');
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
        $data['title'] = 'My Portfolio | Portfolio';
        $data['judul'] = 'Portfolio';
        $data['portfolio'] = $this->Portfolio->getData();
        $this->template->load('admin/template', 'admin/portfolio/index', $data);
    }

    public function add()
    {
        $data['title'] = 'My Portfolio | Tambah Portfolio';
        $data['judul'] = 'Tambah Portfolio';
        $this->template->load('admin/template', 'admin/portfolio/tambah', $data);
    }

    public function addProcess()
    {
        $this->form_validation->set_rules('nama', 'Nama Project', 'trim|required');
        $this->form_validation->set_rules('bahasa', 'Bahasa Pemograman', 'trim|required');
        $this->form_validation->set_rules('client', 'Nama Client', 'trim|required');
        $this->form_validation->set_rules('link', 'Link Project', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->add();
        } else {
            $pos = $this->input->post(null, true);
            $this->Portfolio->insert($pos);
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
                redirect('admin/portfolio');
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
                redirect('admin/portfolio');
            }
        }
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules('nama', 'Nama Project', 'trim|required');
        $this->form_validation->set_rules('bahasa', 'Bahasa Pemograman', 'trim|required');
        $this->form_validation->set_rules('client', 'Nama Client', 'trim|required');
        $this->form_validation->set_rules('link', 'Link Project', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->Portfolio->getData($id);
            if($query->num_rows() > 0){
                $result = $query->row();
                $data['title'] = 'My Portfolio | Update Portfolio';
                $data['judul'] = 'Update Portfolio';
                $data['portfolio'] = $result;
                $this->template->load('admin/template', 'admin/portfolio/ubah', $data);
            }else{
                $this->session->set_flashdata('pesan',
                    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Warning!!</strong> Data Tidak Di Temukan Silahkan Cari Data Yang Sudah Tersedia!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('admin/portfolio');
            }
        } else {
            $pos = $this->input->post(null, true);
            $this->Portfolio->update($pos);
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
                redirect('admin/portfolio');
            }else{
                $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Warning!!</strong> Anda Tidak Mengupdate Data, Silahkan Update Data Yang Di Sediakan!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('admin/portfolio');
            }
        }
        
    }

    public function hapus($id)
    {
        $this->Portfolio->hapus($id);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>Success!!</strong> Selamat Anda Berhasil Menghapus Data!</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/portfolio');
        }else{
            $this->session->set_flashdata('pesan', 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>Failed!!</strong> Anda Gagal Meghapus Data, Sedang Ada Gangguan Server!</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/portfolio');
        }
    }

    public function photo($id)
    {
        $query = $this->Portfolio->getDataPhoto($id);
        $portfolio = $this->Portfolio->getData($id);
        if($portfolio->num_rows() > 0){
            // echo "<pre>";
            // var_dump($portfolio->row());
            // die();
            $photo = $portfolio->row();
            $data['nama'] = $photo;
            $data['id'] = $photo;
            $data['title'] = 'My Portfolio | Portfolio | Data Photo Protfolio';
            $data['judul'] = 'Data Photo Protfolio';
            $data['photoPortfolio'] = $query->result();
            // echo "<pre>";
            // var_dump($data1);
            // die();
            $this->template->load('admin/template', 'admin/portfolio/dataPhoto', $data);
        }else{
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>Warning!!</strong> Data Tidak Di Temukan Silahkan Cari Data Yang Sudah Tersedia!</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/portfolio');
        }
    }

    public function addPhoto($id)
    {
        $query = $this->Portfolio->getData($id);
        if($query->num_rows() > 0){
            $result = $query->row();
            $data['title'] = 'My Portfolio | Portfolio | Add Photo';
            $data['judul'] = 'Add Photo';
            $data['result'] = $result;
            // echo "<pre>";
            // var_dump($result);
            // die();
            $this->template->load('admin/template', 'admin/portfolio/tambahPhoto', $data);
        }else{
            $this->session->set_flashdata('pesan',
                '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>Warning!!</strong> Data Tidak Di Temukan Silahkan Cari Data Yang Sudah Tersedia!</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/portfolio');
        }
    }

    public function addPhotoProcess()
    {
        $id = $this->input->post('id_portfolio');
        $photo = $_FILES['photo']['name'];
        
        if($photo == null){
            $this->session->set_flashdata('pesan', 
                '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>Warning!!</strong> Anda Belum Memasukan Photo!</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/portfolio');
        }else{
            $config['upload_path']      = './assets/upload'; 
            $config['allowed_types']    = 'png|jpg|jpeg';
            $config['max_size']         = '5024';
            $config['encrypt_name']     = true;
    
            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('photo')){
                $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Failed!!</strong> Photo Wajib Format JPG, PNG, JPEG. Max Size 5 MB.!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('admin/portfolio');
            }else{
                $image = $this->upload->data('file_name');
            }
        }

        $data = array(
            'id_portfolio'  => $id,
            'nama_photo'    => $image
        );
        $this->Portfolio->addPhoto($data);
        $this->session->set_flashdata('pesan', 
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Success!!</strong> Anda Berhasil Menambahkan Photo Baru!</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );
        redirect('admin/portfolio');
    }

    public function hapusPhoto($id)
    {
        $this->Portfolio->hapusPhoto($id);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('pesan', 
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>Success!!</strong> Selamat Anda Berhasil Menghapus Photo!</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/portfolio');
        }else{
            $this->session->set_flashdata('pesan', 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong>Failed!!</strong> Anda Gagal Menghapus Photo, Server Sedang Bermasalah, Silahkan Tunggu Beberapa Saat Lagi!</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/portfolio');
        }
    }
}
?>