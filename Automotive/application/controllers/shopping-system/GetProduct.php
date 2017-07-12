<?php


class GetProduct extends CI_Controller


{




    public function __construct()

    {
        parent::__construct();
//Load Library and model.

        $this->load->library('cart');
        $this->load->model('billing_model');
        $this->load->library('pagination');
        $this->load->helper('array');


    }

    public function index()

    {
//Get all data from database

//send all product data to "shopping_view", which fetch from database.
        $config['base_url'] = base_url()."shopping/index";
        $total_row = $this->db->count_all('products');
        $config["uri_segment"] = 3;
        $config["total_rows"] = $total_row;
        $config["per_page"] = 6;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);


        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);


        $data['categories'] = $this->billing_model->get_categories();
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['products'] = $this->billing_model->get_all($config["per_page"], $data['page']);
        //call the model function to get the department data
        $data['pagination'] = $this->pagination->create_links();




/////category

        $this->load->view('header',$data);
        $this->load->view('cadillac/shopping_view');
        $this->load->view('delivery');
        $this->load->view('REG');
        $this->load->view('login');

    }


}