<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_users
 *
 * @author Faisal_pc
 */
class Login_model extends CI_Model{

    var $details;
    public function validate_user($email,$password){

     $this->db->select('*');
     $this->db->from('users');
     $this->db->where('email',$email);
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
            'id'=>$this->details->cust_id,
            'name'=> $this->details->username . ' ' . $this->details->lastname,
            'email'=>$this->details->email,
          
            'country'=>$this->details->country,
            'phone'=>$this->details->phone,
            'isLoggedIn'=>true));
    }



}


