<?php

/**
 * Created by PhpStorm.
 * User: Faisal_pc
 * Date: 3/5/2016
 * Time: 8:17 AM
 */
class Home extends CI_Controller
{



    public function index()

    {
      $data['title']='Home';


        $this->parser->parse( 'master/header', $data );

        $this->load->view('registration/login');
        $this->load->view('registration/create_account');

          $this->load->view('master/body');
        $this->load->view('master/Services');
        $this->load->view('master/HowWeWork');
        $this->load->view('master/About');
        $this->load->view('master/Contact');
        $this->load->view('master/map');
        $this->load->view('master/footer');
        $this->load->view('admin/AdminLogin');

    }

    public function restricted()

    {

        $this->load->view('master/restricted');

    }//end restricted
    

/*        check if the user in database       */


     public function faq(){

         $data['title']='Frequently Asked Questions';


         $this->parser->parse( 'master/header', $data );

         $this->load->view('master/faq');
         $this->load->view('master/footer');
     }

   public function TES(){

       $this->load->view('home/test');

   }














}

















/*
 *
 * public function Member()
    {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->view('memberArea');
        } else {
          redirect('home/restricted');
        }
}//end member
 *
 *
 * */
    /*
     *
     *

     *       //Ensure values exist for email and pass, and validate the user's credentials
      if( $email && $pass && $this->user_m->validate_user($email,$pass)) {
          // If the user is valid, redirect to the main view
          redirect('/main/show_main');
      } else {
          // Otherwise show the login screen with an error message.
          $this->show_login(true);
      }
     *
     *
     *
     *
     *
     *
     *
     * */
    /* get email chick */
    /*
    public function Check_Email($email){
        $this->load->model('model_users');
        $email=$this->input->post('emaillogin');
        if($this->model_users->check_email($email)){
            return true;
        }
        else{
            $this->form_validation->set_message('Check_Email','Incorrect password');
            return false;
        }
    }
*/

/*
    public function validate_credentials()
    {

        $this->load->model('model_users');
        if ($this->model_users->can_log_in()) {
            return true;

        } else {

            $this->form_validation->set_message('validate_credentials','Incorrect usename/password');
            return false;
        }
    }//end valid_credentials

*/

/*
 *
 *
 *  public function register()
    {
        $this->load->model('model_users');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
//username rule
        $this->form_validation->set_rules('username', 'Username', 'required|user_exists');

        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
//email rule
        $this->form_validation->set_rules('email', 'Email Address', 'required|user_exists');

//password rule
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|max_length[18]|
matches[password_conf]');
//confirm pass rule
        $this->form_validation->set_rules('password_conf', 'Password Confirmation', 'required|matches[password]');

//date rules


//country rule
        $this->form_validation->set_rules('country', 'Country', 'required');
//phone rules
        $this->form_validation->set_rules('phonenum', 'Phone', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['errors'] = validation_errors();
            $this->load->view('REG', $data);
        } else {
            $data['username'] = $this->input->post('username');

            $data['email'] = $this->input->post('email');

            $data['password'] = $this->input->post('password');

            $data['country'] = $this->input->post('country');

            $data['phone'] = $this->input->post('phonenum');

            $data['date'] = $this->input->post('date');
            $data['lastname'] = $this->input->post('lastname');
            if ($this->model_users->create($data) === TRUE) {
                $data['message'] =
                    "The user account has now been created! You can login "
                    . anchor('home/login', 'here') . ".";
                $this->load->view('Success', $data);
            } else {
                $data['error'] =
                    "There was a problem when adding your account to the database.";
                $this->load->view('error', $data);
            }
        }
    }
 *
 * */
/*
 *  public function user_exists($user)
    {
        $query = $this->db->get_where('users', array('username' => $user));

        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('user_exists', 'The
%s already exists in our database, please use a different one.');
            return FALSE;
        }
        $query->free_result();
        return TRUE;
    }
    function email_exists($email)
    {
        $query = $this->db->get_where('users', array('email' => $email));
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('email_exists', 'The %s
already exists in our database, please use a different one.');

        }
        $query->free_result();
        echo 'welcome';
    }


 public function valid()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|callback_validate_credentials');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()) {
            $data = array(
                'email' => $this->input->post('email'),
                'is_logged_in' => 1
            );
            $this->session->set_userdata($data);
            redirect('home/member');
        } else {
            $this->load->view('login');
        }
    }//end valid

*/