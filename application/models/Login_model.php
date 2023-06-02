<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function cek_login($pos)
    {
        $username = $pos['username'];
        $password = $pos['password'];

        $result = $this->db->where('username', $username)
                            ->where('password', md5($password))
                            ->where('status', 'active')
                            ->limit(1)
                            ->get('user');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return false;
        }
    }
}

?>