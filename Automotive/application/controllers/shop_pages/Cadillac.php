<?php
/*
/**
 * Created by PhpStorm.
 * User: Faisal_pc
 * Date: 4/26/2016
 * Time: 9:58 AM
 */
class Cadillac extends CI_Controller
{


    public function __construct()

    {
        parent::__construct();//controller class as a parent
        $this->form_validation->set_error_delimiters('<div class=
          "alert alert-danger">', '</div>');
        $this->load->model('shopping_system/GetProduct','products');
        $this->load->library('pagination');
    }


    public function Cadillac_shop()

    {

        $data['title']='Cadillac shop';
        $this->parser->parse('master/header', $data);
        $this->load->view('Cadillac/Cadilac_Menu');
        $this->load->view('Cadillac/CadillacCarousel');
        $this->load->view('Cadillac/main_category');
        $this->load->view('Cadillac/car_model');
        $this->load->view('Cadillac/exhaust_system');
        $this->load->view('Cadillac/Brake_System');
        $this->load->view('Cadillac/Suspension-system');
        $this->load->view('Cadillac/turbo-systems');
        $this->load->view('Cadillac/help-center');
        $this->load->view('registration/login');
        $this->load->view('registration/create_account');
        $this->load->view('Cadillac/Delivery');
        $this->load->view('master/footer');
    }

    public function About_Cadillac()

    {

        $data['title']='About cadillac';
        $this->parser->parse('master/header', $data);
        $this->load->view('Cadillac/Cadilac_Menu');
        $this->load->view('Cadillac/CadillacCarousel');
        $this->load->view('Cadillac/About_Cadillac');
        $this->load->view('registration/login');
        $this->load->view('registration/create_account');
        $this->load->view('Cadillac/help-center');
        $this->load->view('Cadillac/Delivery');
        $this->load->view('master/footer');
    }



public function index(){

    $config=array();
    $config['base_url']=base_url().'shop_pages/Cadillac/index';
    $config['total_rows']=$this->products->count_products();
    $config['per_page']=3;
    $config["num_links"] =3;
    //$config["uri_segment"] = 3;
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
    $data['categories'] = $this->products->get_all_categories();
    $page=$this->uri->segment(4);
    $data['product']=$this->products->fetch_products($config['per_page'],$page);
    $data['links'] = $this->pagination->create_links();

    $dataTitle['title']='Cadillac escalade shop';


    $this->parser->parse('master/header', $dataTitle);


    $this->load->view('Cadillac/Cadilac_Menu',$data);

    $this->load->view('Cadillac/shopping_view');
    $this->load->view('registration/create_account');
    $this->load->view('registration/login');
    $this->load->view('Cadillac/help-center');
    $this->load->view('Cadillac/Delivery');
    $this->load->view('master/footer');

}

    public function searchProducts(){

        $productname=$this->input->post('search');
        if(isset($productname)and !empty($productname)){
            $data['product']=$this->products->searchProduct($productname);
            $data['links']='';
            $this->load->view('master/header');
            $this->load->view('Cadillac/shopping_view',$data);
            $this->load->view('master/footer');
        }

        else{
            redirect($this->index());
        }

    }

}