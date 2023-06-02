<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model
{
    public function getData($id = null)
    {
        $this->db->from('blog');
        if($id != null){
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function insert($pos)
    {
        date_default_timezone_set('Asia/Jakarta');
        $dateTime = date('Y-m-d H:i:s');

        $params = [
            'judul'         =>  $pos['judul'],
            'description'   =>  $pos['description'],
            'created_at'    =>  $dateTime,
            'created_by'    =>  $pos['created_at'],
        ];
        $this->db->insert('blog', $params);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('blog');
    }

    public function update($pos)
    {
        date_default_timezone_set('Asia/Jakarta');
        $dateTime = date('Y-m-d H:i:s');

        $params = [
            'judul'         =>  $pos['judul'],
            'description'   =>  $pos['description'],
            'created_at'    =>  $dateTime,
            'created_by'    =>  $pos['created_at']
        ];
        $this->db->where('id', $pos['id']);
        $this->db->update('blog', $params);
    }

    public function getDataPhoto($id)
    {
        $this->db->select('*');
        $this->db->from('photo_blog');
        $this->db->join('blog', 'blog.id = photo_blog.id_blog');
        $this->db->where('id_blog', $id);
        $data = $this->db->get();
        return $data;
    }

    public function addPhoto($data)
    {
        $this->db->insert('photo_blog', $data);
    }

    public function hapusPhoto($id)
    {
        $this->db->where('id_photo', $id);
        $this->db->delete('photo_blog');
    }
}
?>