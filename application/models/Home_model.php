<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function getData()
    {
        $this->db->select('*');
        $this->db->from('identitas_diri');
        $data = $this->db->get();
        return $data;
    }

    public function getSkils()
    {
        $this->db->select('*');
        $this->db->from('skils');
        $data = $this->db->get();
        return $data;
    }

    public function getMedsos()
    {
        $this->db->select('*');
        $this->db->from('medsos');
        $data = $this->db->get();
        return $data;
    }

    public function getExperience()
    {
        $this->db->select('*');
        $this->db->from('experience');
        $data = $this->db->get();
        return $data;
    }

    public function getEducation()
    {
        $this->db->select('*');
        $this->db->from('education');
        $data = $this->db->get();
        return $data;
    }

    public function getPortfolio()
    {
        $this->db->select('*');
        $this->db->from('portfolio');
        $data = $this->db->get();
        return $data;
    }

    public function getPortfolioJoin($id)
    {
        $this->db->select('*');
        $this->db->from('portfolio');
        $this->db->join('photo_portfolio', 'photo_portfolio.id_portfolio = portfolio.id');
        $this->db->where('id', $id);
        $data = $this->db->get();
        return $data;
    }

    public function getPortfolioCover()
    {
        $this->db->select('*');
        $this->db->from('portfolio');
        $this->db->join('photo_portfolio', 'photo_portfolio.id_portfolio = portfolio.id');
        $this->db->group_by('id_portfolio');
        $data = $this->db->get();
        return $data;
    }

    public function getBlogs()
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->join('photo_blog', 'photo_blog.id_blog = blog.id');
        $this->db->order_by('id', 'desc');
        $this->db->group_by('id_blog');
        $data = $this->db->get();
        return $data;
    }

    public function getBlogsId($id)
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->join('photo_blog', 'photo_blog.id_blog = blog.id');
        $this->db->where('id', $id);
        $this->db->group_by('id_blog');
        $data = $this->db->get();
        return $data;
    }
}

?>