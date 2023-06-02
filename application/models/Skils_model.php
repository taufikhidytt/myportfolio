<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Skils_model extends CI_Model
{
    public function getData($id = null)
    {
        $this->db->from('skils');
        if($id != null){
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function insert($pos)
    {
        $params = [
            'nama'          =>  $pos['nama'],
            'persentase'    =>  $pos['persentase'],
        ];
        $this->db->insert('skils', $params);
    }

    public function update($pos)
    {
        $params = [
            'nama' => $pos['nama'],
            'persentase' => $pos['persentase']
        ];
        $this->db->where('id', $pos['id']);
        $this->db->update('skils', $params);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('skils');
    }
}
?>