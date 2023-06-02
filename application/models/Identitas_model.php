<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Identitas_model extends CI_Model
{
    public function getdata($id = null)
    {
        $this->db->from('identitas_diri');
        if($id != null){
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function update($data, $where)
    {
        $this->db->where($where);
        $this->db->update('identitas_diri', $data);
    }
}
?>