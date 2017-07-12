<?php

/**
 * Created by PhpStorm.
 * User: Faisal_pc
 * Date: 5/18/2016
 * Time: 2:01 PM
 */

class Product extends CI_Controller

{
    public function __construct()

    {

        parent::__construct();
        $this->load->model('siteModel/Product_model','products');

    }

    public function product_list()

    {
        $list = $this->products->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $product) {
            $no++;
            $row   = array();
            $row[] = $product->product_id;
          //  $row[] = '<img src='. $product->product_image .' />';
            $row[] = $product->product_image;
            $row[] = $product->product_name;
            $row[] = $product->product_code;
            $row[] = $product->product_description;
            $row[] = $product->cat_id;
            $row[] = $product->produc_price;

            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_product('."'".$product->product_id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Delete" onclick="delete_product('."'".$product->product_id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->products->count_all(),
            "recordsFiltered" => $this->products->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
//no
    public function product_edit($product_id)

    {

        $data = $this->products->get_by_id($product_id);
        echo json_encode($data);

    }
// work



    public function product_add()

    {

       
        $data = array(

            'product_image'=>$this->input->post('product_image'),
            'product_name' => $this->input->post('product_name'),
            'product_code' => $this->input->post('product_code'),
            'product_description' => $this->input->post('product_description'),
            'cat_id' => $this->input->post('category_id'),
            'produc_price' => $this->input->post('produc_price'),

            );

        $insert=  $this->products->save($data);
        echo json_encode(array("status" => TRUE));

    }
// no
    public function product_update()

    {


        $data = array(
            'product_image'=>$this->input->post('product_image'),
            'product_name' => $this->input->post('product_name'),
            'product_code' => $this->input->post('product_code'),
            'product_description' => $this->input->post('product_description'),
            'cat_id' => $this->input->post('category_id'),
            'produc_price' => $this->input->post('product_price'),

        );

        $this->products->update(array('product_id' => $this->input->post('product_id')), $data);
        echo json_encode(array("status" => TRUE));

    }

    public function product_delete($product_id)

    {

        $this->products->delete_by_id($product_id);

    }



}