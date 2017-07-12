<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Account_model
 *
 * @author Faisal_pc
 */
class Create_account_model extends CI_Model{


    function insert_user($data){
        return $this->db->insert('users',$data);

    }




    public function create($data)


    {


        if($this->db->insert('users', $data))
        {

            return TRUE;
        }


        return FALSE;

    }

}
