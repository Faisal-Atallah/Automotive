<?php


class DisplayOrders extends CI_Controller

{





    public function __construct()
    {

        parent::__construct();

        $this->load->model('Admin/GetOrders','order');
    }


    public function orders(){

        $data['orders'] = $this->order->fetch_orders();

        $this->load->view('admin/Nav',$data);


        $this->load->view('admin/orders');



        $this->load->view('admin/footer');


    }





    public function ordersDetails(){

        $data['orders_detail'] = $this->order->fetch_orders_detail();

        $this->load->view('admin/Nav',$data);


        $this->load->view('admin/ordersDetails');

        $this->load->view('admin/footer');


    }





}