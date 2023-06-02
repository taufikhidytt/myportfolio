<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model', 'Home');
    }

    public function index()
    {
        $data['title'] = 'My Portfolio';
        $data['identitas'] = $this->Home->getData()->row();
        $this->load->view('home', $data);
    }

    public function about()
    {
        $data['title'] = 'My Portfolio | About';
        $data['identitas'] = $this->Home->getData()->row();
        $data['medsos'] = $this->Home->getMedsos();
        $data['skils']  =  $this->Home->getSkils();
        $data['experience']  =  $this->Home->getExperience();
        $data['education']  =  $this->Home->getEducation();
        $portfolio = $this->Home->getPortfolio();
        $data['portfolio'] = $portfolio->num_rows();
        $this->load->view('about', $data);
    }

    public function portfolio()
    {
        $data['title'] = 'My Portfolio | Portfolio';
        $data['coverPortfolio'] = $this->Home->getPortfolioCover()->result();
        // $data['portfolio'] = $this->Home->getPortfolioJoin();
        $this->load->view('portfolio', $data);
    }

    public function portfolioDetail($id)
    {
        $query = $this->Home->getPortfolioJoin($id);
        if($query->num_rows() > 0){
            $result = $query->result();
            $data['title'] = 'My Portfolio | Detail Portfolio';
            $data['nama'] = $this->db->query("SELECT nama FROM portfolio JOIN photo_portfolio ON photo_portfolio.id_portfolio = portfolio.id WHERE portfolio.id = $id")->row();
            $data['detailPortfolio'] = $result;
            $this->load->view('detailPortfolio', $data);
        }else{
            $this->session->set_flashdata('pesan', 
                '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Warning!</strong> Data Tidak Di Temukan Silahkan Cari Data Yang Tersedia.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('portfolio');
        }
    }

    public function blogs()
    {
        $data['title'] = 'My Portfolio | Blogs';
        $data['blogs'] = $this->Home->getBlogs();
        $this->load->view('blogs', $data);
    }

    public function detailBlogs($id)
    {
        $query = $this->Home->getBlogsId($id);
        if($query->num_rows() > 0){
            $result = $query->row();
            $data['title'] = 'My Portfolio | Detail Blogs';
            $data['blogs'] = $result;
            $data['photo'] = $this->db->query("SELECT * FROM photo_blog WHERE id_blog = $id")->result();
            $this->load->view('detailBlogs', $data);
        }else{
            $this->session->set_flashdata('pesan', 
                '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Warning!</strong> Data Tidak Di Temukan Silahkan Cari Data Yang Tersedia.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('blogs');
        }
    }
}
?>