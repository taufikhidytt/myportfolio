<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Medsos_model extends CI_Model
{
    public function getData($id = null)
    {
        $this->db->from('medsos');
        if($id != null){
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($pos)
    {
        $param = [
            'link'  =>  $pos['link'],
            'icon'  =>  $pos['icon'],
        ];
        $this->db->insert('medsos', $param);
    }

    public function update($pos)
    {
        $param = [
            'link'  =>  $pos['link'],
            'icon'  =>  $pos['icon'],
        ];
        $this->db->where('id', $pos['id']);
        $this->db->update('medsos', $param);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('medsos');
    }
}
?>