<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model', 'Blog');
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
        $data['title'] = 'My Blog | Blog';
        $data['judul'] = 'Blog';
        $data['blog'] = $this->Blog->getData();
        $this->template->load('admin/template', 'admin/blog/index', $data);
    }

    public function add()
    {
        $data['title'] = 'My Portfolio | Tambah Blog';
        $data['judul'] = 'Tambah Blog';
        $data['nama'] = $this->db->query("SELECT * FROM identitas_diri")->row();
        $this->template->load('admin/template', 'admin/blog/tambah', $data);
    }

    public function addProcess()
    {
        $this->form_validation->set_rules('judul', 'Judul Blogs', 'trim|required');
        $this->form_validation->set_rules('description', 'Description Blogs', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->add();
        } else {
            $pos = $this->input->post(null, true);
            $this->Blog->insert($pos);
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
                redirect('admin/blog');
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
                redirect('admin/blog');
            }
        }
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules('judul', 'Judul Blogs', 'trim|required');
        $this->form_validation->set_rules('description', 'Description Blogs', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->Blog->getData($id);
            if($query->num_rows() > 0){
                $result = $query->row();
                $data['title'] = 'My Portfolio | Update Blog';
                $data['judul'] = 'Update Blog';
                $data['blog'] = $result;
                $data['nama'] = $this->db->query("SELECT * FROM identitas_diri")->row();
                $this->template->load('admin/template', 'admin/blog/ubah', $data);
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
                redirect('admin/blog');
            }
        } else {
            $pos = $this->input->post(null, true);
            $this->Blog->update($pos);
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
                redirect('admin/blog');
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
                redirect('admin/blog');
            }
        }
        
    }

    public function hapus($id)
    {
        $this->Blog->hapus($id);
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
            redirect('admin/blog');
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
            redirect('admin/blog');
        }
    }

    public function photo($id)
    {
        $query = $this->Blog->getDataPhoto($id);
        $blog = $this->Blog->getData($id);
        if($blog->num_rows() > 0){
            // echo "<pre>";
            // var_dump($portfolio->row());
            // die();
            $photo = $blog->row();
            $data['nama'] = $photo;
            $data['id'] = $photo;
            $data['title'] = 'My Portfolio | Blog | Data Photo Blog';
            $data['judul'] = 'Data Photo Blog';
            $data['photoBlog'] = $query->result();
            // echo "<pre>";
            // var_dump($data1);
            // die();
            $this->template->load('admin/template', 'admin/blog/dataPhoto', $data);
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
            redirect('admin/blog');
        }
    }

    public function addPhoto($id)
    {
        $query = $this->Blog->getData($id);
        if($query->num_rows() > 0){
            $result = $query->row();
            $data['title'] = 'My Portfolio | Blog | Add Photo Blog';
            $data['judul'] = 'Add Photo Blog';
            $data['result'] = $result;
            // echo "<pre>";
            // var_dump($result);
            // die();
            $this->template->load('admin/template', 'admin/blog/tambahPhoto', $data);
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
            redirect('admin/blog');
        }
    }

    public function addPhotoProcess()
    {
        $id = $this->input->post('id_blog');
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
            redirect('admin/blog');
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
                redirect('admin/blog');
            }else{
                $image = $this->upload->data('file_name');
            }
        }

        $data = array(
            'id_blog'  => $id,
            'photo'    => $image
        );
        $this->Blog->addPhoto($data);
        $this->session->set_flashdata('pesan', 
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Success!!</strong> Anda Berhasil Menambahkan Photo Baru!</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );
        redirect('admin/blog');
    }

    public function hapusPhoto($id)
    {
        $this->Blog->hapusPhoto($id);
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
            redirect('admin/blog');
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
            redirect('admin/blog');
        }
    }
}
?>