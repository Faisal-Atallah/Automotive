<?php


class Login extends CI_Controller
{


    function __construct()
    {
        parent::__construct();

        $this->form_validation->set_error_delimiters('', '');

        $this->load->model('registration_system/Login_model','login');
    }

    /*login*/
    /*========================================================== Login System ===============================================================*/

    public function validation_user()
    {

        //get posted value from login view
        //set validation
        $this->form_validation->set_rules('emaillogin', 'EMAIL', 'callback_valid_user');

        $this->form_validation->set_rules('passwordlogin', 'PASSWORD', 'callback_valid_user');

        if ($this->form_validation->run()==false) {

            /* $err['ErrCllback']=json_encode(validation_errors());
             echo $err;
                         */
            echo 'sorry';
        }

        else {
            echo 'HELLO';
        }

    }

    /* get validation if the user exist from model*/

    public function valid_user()

    {

        $password = $this->input->post('passwordlogin');
        $email = $this->input->post('emaillogin');
        if ($this->login->validate_user($email, $password)) {
            return true;
        } else {
            /*
            $this->form_validation->set_message('valid_user', 'Incorrect email/password');
            return false;
            */
            return false;
        }
    }


    //role


    public function user_area()
    {

        if ($this->session->userdata('isLoggedIn')) {
            redirect('master/home/index');
        } else {
            redirect('master/home/restricted');
        }
    }

    public function te(){
        $this->load->view('logo');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('master/home/index');
    }//logout





}