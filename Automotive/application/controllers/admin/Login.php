<?php


class Login extends CI_Controller


{


public function __construct()
{

    parent::__construct();

    $this->load->model('Admin/Login_admin','admin_model');

    $this->load->model('Admin/GetOrders','order');
}


    public function Logout(){
        $this->session->sess_destroy();
        redirect('master/Home/index');
    }

    public function Admin_area()
    {

        if ($this->session->userdata('isLoggedIn'))

        {
            $data['orders'] = $this->order->fetch_orders();

            $data['orders_detail'] = $this->order->fetch_orders_detail();

            $this->load->view('admin/Nav',$data);

//            $this->load->view('admin/product');

            $this->load->view('admin/body');

            $this->load->view('admin/footer');

        }

        else {

            redirect('home/restricted');

        }
    }

    public function validation_admin()

    {

        //get posted value from login view
        //set validation
        $this->form_validation->set_rules('emaillogin', 'EMAIL', 'callback_valid_admin');

        $this->form_validation->set_rules('passwordlogin', 'PASSWORD', 'callback_valid_admin');

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
    public function valid_admin()
    {

        $password = $this->input->post('passwordlogin');
        $email = $this->input->post('emaillogin');
        if ($this->admin_model->validate_user($email, $password)) {
            return true;
        } else {
            /*
            $this->form_validation->set_message('valid_user', 'Incorrect email/password');
            return false;
            */
            return false;
        }
    }



}