<?php


class Contact extends CI_Controller
{




    /*--===============================-- CONTACT --=============================================----*/

    public function sendEmail()

    {
        /*         validation rule           */

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('subject','Subject','required');
        $this->form_validation->set_rules('message','Message','required');


        /*   if the validation is false       */

        if($this->form_validation->run()==false){

        }


        /* if validation is run */

        else {


            //get user what type

            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            //configure email settings
            $config['protocol'] = 'smtp';
            $config['smtp_host']='ssl://smtp.live.com';
            $config['smtp_host']='ssl://smtp.mail.yahoo.com';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'faisalattallah93@gmail.com';
            $config['smtp_pass'] = '0786650643';
            $config['mailtype'] = 'html';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n";

            /* set configration in email system */

            $this->email->initialize($config);

            $this->email->from($email,$name);
            $this->email->to('faisalattallah93@gmail.com');
            $this->email->subject($subject);
            $this->email->message($message);

             /*  check if email has sent  */

             /* if is sent */

            if ($this->email->send()) {

                echo "We have successfully received your email";

                /* if not been send */

            } else {

                echo $this->email->print_debugger();

            }


        }
    }

}