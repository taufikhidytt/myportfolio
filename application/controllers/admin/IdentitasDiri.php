<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class IdentitasDiri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Identitas_model', 'Identitas');
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
        $data['title'] = 'My Portfolio | Identitas Diri';
        $data['judul'] = 'Identitas Diri';
        $data['identitas'] = $this->Identitas->getData();
        $this->template->load('admin/template', 'admin/identitasDiri/index', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('profesi', 'Profesi', 'trim|required');
        $this->form_validation->set_rules('umur', 'Umur', 'trim|required|numeric');
        $this->form_validation->set_rules('negara', 'Negara', 'trim|required');
        $this->form_validation->set_rules('tempat_kerja', 'Tempat Kerja', 'trim|required');
        $this->form_validation->set_rules('daerah_tinggal', 'Daerah Tinggal', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('bahasa', 'Bahasa', 'trim|required');
        $this->form_validation->set_rules('tahun_pengalaman', 'Tahun Pengalaman', 'trim|required|numeric');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|min_length[10]');
        
        
        if ($this->form_validation->run() == FALSE) {
            $query = $this->Identitas->getData($id);
            if($query->num_rows() > 0){
                $data['title'] = 'My Portfolio | Identitas Diri | Update';
                $data['judul'] = 'Update Identitas Diri';
                $identitas = $query->row();
                $data['identitas'] = $identitas;
                $this->template->load('admin/template', 'admin/identitasDiri/update', $data);
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
                redirect('admin/identitasDiri/index');
            }
        } else {
            $id                 = $this->input->post('id');
            $nama               = $this->input->post('nama');
            $profesi            = $this->input->post('profesi');
            $umur               = $this->input->post('umur');
            $negara             = $this->input->post('negara');
            $tempat_kerja       = $this->input->post('tempat_kerja');
            $daerah_tinggal     = $this->input->post('daerah_tinggal');
            $email              = $this->input->post('email');
            $bahasa             = $this->input->post('bahasa');
            $tahun_pengalaman   = $this->input->post('tahun_pengalaman');
            $deskripsi          = $this->input->post('deskripsi');
            $photo              = $_FILES['photo']['name'];

            if($photo){
                $config['allowed_types'] = 'png|jpg|jpeg';
                $config['upload_path'] = './assets/upload';
                $config['encrypt_name'] = true;
                $config['max_size'] = '5048';

                $this->load->library('upload', $config);
                if($this->upload->do_upload('photo')){
                    $photo = $this->upload->data('file_name');
                    $this->db->set('photo', $photo);
                }else{
                    $this->session->set_flashdata('pesan', 
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                            <span class="alert-text"><strong>Failed!!</strong> Anda Gagal Mengupload Photo. Format Photo Wajib PNG, JPG, JPEG Dan Max 5 MB!</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
                    );
                    redirect('admin/identitasDiri');
                }
            }

            $data = array(
                'nama_lengkap'      =>  $nama,
                'profesi'           =>  $profesi,
                'umur'              =>  $umur,
                'negara_asal'       =>  $negara,
                'tempat_kerja'      =>  $tempat_kerja,
                'daerah_tinggal'    =>  $daerah_tinggal,
                'email'             =>  $email,
                'bahasa'            =>  $bahasa,
                'tahun_pengalaman'  =>  $tahun_pengalaman,
                'deskripsi'         =>  $deskripsi
            );
            
            $where = array(
                'id'    =>  $id
            );

            $this->Identitas->update($data, $where);
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Success!!</strong> Selamat Anda Berhasil Mengupdate Data Anda!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('admin/identitasDiri');
            }else{
                $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Warning!!</strong> Anda Tidak Mengupdate Apapun, Silahkan Mencoba Mengupdate Data!</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('admin/identitasDiri');
            }
        }
    }
}

?>