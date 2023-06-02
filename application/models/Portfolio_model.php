<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_model extends CI_Model
{
    public function getData($id = null)
    {
        $this->db->from('portfolio');
        if($id != null){
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function insert($pos)
    {
        $params = [
            'nama'      =>  $pos['nama'],
            'bahasa'    =>  $pos['bahasa'],
            'client'    =>  $pos['client'],
            'link'      =>  $pos['link']
        ];
        $this->db->insert('portfolio', $params);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('portfolio');
    }

    public function update($pos)
    {
        $params = [
            'nama'      =>  $pos['nama'],
            'bahasa'    =>  $pos['bahasa'],
            'client'    =>  $pos['client'],
            'link'      =>  $pos['link']
        ];
        $this->db->where('id', $pos['id']);
        $this->db->update('portfolio', $params);
    }

    public function getDataPhoto($id)
    {
        $this->db->select('*');
        $this->db->from('photo_portfolio');
        $this->db->join('portfolio', 'portfolio.id = photo_portfolio.id_portfolio');
        $this->db->where('id_portfolio', $id);
        $data = $this->db->get();
        return $data;
    }

    public function addPhoto($data)
    {
        $this->db->insert('photo_portfolio', $data);
    }

    public function hapusPhoto($id)
    {
        $this->db->where('id_photo', $id);
        $this->db->delete('photo_portfolio');
    }
}
?>