<?php

/**
 * Created by PhpStorm.
 * User: Faisal_pc
 * Date: 5/23/2016
 * Time: 5:09 PM
 */
class Login_admin extends CI_Model
{

    var $details;
    public function validate_user($email,$password){
        $this->db->select('*');
        $this->db->from('admins');
        $this->db->where('admin_email',$email);
        $this->db->where('password',$password);
        $login=$this->db->get()->result();

        if(is_array($login)&&count($login)==1){

            $this->details=$login[0];
            $this->set_session();
            return true;
        }
        return false;
    }
    public function set_session(){
        $this->session->set_userdata( array(
            'admin_id'=>$this->details->admin_id,
            'admin_name'=> $this->details->admin_name . ' ' . $this->details->lastname,
            'admin_email'=>$this->details->admin_email,
            'isLoggedIn'=>true));
    }


    public function create($data)
    {
        if($this->db->insert('admins', $data))
        {
            return TRUE;
        }
        return FALSE;
    }




}