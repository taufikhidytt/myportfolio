<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Education_model extends CI_Model
{
    public function getData($id = null)
    {
        $this->db->from('education');
        if($id != null){
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($pos)
    {
        $param = [
            'nama_education'  =>  $pos['nama'],
            'jurusan'         =>  $pos['jurusan'],
            'tahun_mulai'     =>  $pos['tahun_mulai'],
            'tahun_akhir'     =>  $pos['tahun_akhir'],
            'deskripsi'       =>  $pos['deskripsi']
        ];
        $this->db->insert('education', $param);
    }

    public function update($pos)
    {
        $param = [
            'nama_education'    =>  $pos['nama'],
            'jurusan'           =>  $pos['jurusan'],
            'tahun_mulai'       =>  $pos['tahun_mulai'],
            'tahun_akhir'       =>  $pos['tahun_akhir'],
            'deskripsi'         =>  $pos['deskripsi']
        ];
        $this->db->where('id', $pos['id']);
        $this->db->update('education', $param);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('education');
    }
}
?>