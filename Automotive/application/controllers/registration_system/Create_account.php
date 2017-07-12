<?php

class Create_account extends CI_Controller


{



    function __construct()
    {
        parent::__construct();

        $this->form_validation->set_error_delimiters('', '');

        $this->load->model('registration_system/Create_account_model','register');
    }




    /*================================================= register ============================================================
    ========================================================================================================================*/
    public function accept()

    {

        $this->form_validation->set_rules('email', 'Email Address','required|callback_if_email_exist');


        if ($this->form_validation->run()==false) {

            echo 'EMAIL_EXIST';

        }


        else{


            $data['username'] = $this->input->post('username');

            $data['email'] = $this->input->post('email');

            $data['password'] = $this->input->post('password');

            $data['country'] = $this->input->post('country');

            $data['phone'] = $this->input->post('phonenum');

            $data['date'] = $this->input->post('date');

            $data['lastname'] = $this->input->post('lastname');


            if ($this->register->create($data) === TRUE) {

                echo 'ACCEPT';
            }


            else {

            }

        }


    }
//
//
//               user_check
    public function if_username_exist($username){

        $this->db->where('username',$username);
        $result=$this->db->get('users');

        if($result->num_rows() > 0){

            $this->form_validation->set_message('User name', 'The %s
already exists in our database, please use a different one.');
            return false; //username exist

        }
        else{
            return true; // can use it
        }
    }
    //         email check
    public function if_email_exist($email){

        $this->db->where('email',$email);
        $result=$this->db->get('users');

        if($result->num_rows() > 0){
            return false; //email exist
        }

        else{

            return true;// can use it

        }



    }


}