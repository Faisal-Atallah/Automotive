<?php


class Orders extends CI_Controller


{


    function billing_view(){
// Load "billing_view".
        $this->load->view('master/header');
        $this->load->view('Cadillac/Cadilac_Menu');
        $this->load->view('Cadillac/billing_view');

    }


    public function save_order()
    {
// This will store all values which inserted from user.
        $customer = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'country' => $this->input->post('country'),
            'phone' => $this->input->post('phone'),

            'homeNumber' => $this->input->post('homenumber'),
            'streetadress' => $this->input->post('street'),
            'note' => $this->input->post('note'),
        );
// And store user information in database.
        $cust_id = $this->billing_model->insert_customer($customer);
        $order = array(
            'date' => date('Y-m-d'),
            'cust_id' => $cust_id
        );

        $ord_id = $this->billing_model->insert_order($order);
        if ($cart = $this->cart->contents()):
            foreach ($cart as $item):
                $order_detail = array(
                    'order_id' => $ord_id,
                    'product_id' => $item['id'],
                    'quantity' => $item['qty'],
                    'price' => $item['price']
                );
// Insert product imformation with order detail, store in cart also store in database.


                $cust_id = $this->billing_model->insert_order_detail($order_detail);
            endforeach;
            echo 'suc';
        endif;
        $array = array(
            $user = $this->input->post('username'),
            $billding = $this->input->post('homenumber'),
            $street = $this->input->post('street'),
            $phone = $this->input->post('phone'),
            $contry = $this->input->post('country'),
        );


        $message = "Order: " . print_r($array + $order_detail, true);
        $list = array('faisalattallah93@gmail.com', 'spart.sompany@gmail.com');

        $name = $this->input->post('name');
        $email = $this->input->post('email');
        //configure email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.live.com';
        $config['smtp_host'] = 'ssl://smtp.mail.yahoo.com';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = 'faisalattallah93@gmail.com';
        $config['smtp_pass'] = '0786650643';
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n";
        $this->email->initialize($config);
        $this->load->library('email');
        $this->email->from($email, $name);
        $this->email->to($list);

        $this->email->message($message);

        if ($this->email->send()) {
            return true;

        } else {

            echo $this->email->print_debugger();

        }

// After storing all imformation in database load "billing_success".



    }




}