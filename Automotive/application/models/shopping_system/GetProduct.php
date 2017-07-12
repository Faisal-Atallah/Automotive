<?php

class GetProduct extends CI_Model


{



    public function get_all_product(){
        $query = $this->db->get("products");
        return $query;
    }



    // Get all details ehich store in "products" table in database.
    public function get_all($limit, $start)
    {
        /* $this->db->limit($limit);
          $this->db->where('product_id', $id);
         $query = $this->db->get("products");


         //$this->db->get('products');
         return $query->result_array();
 */
        $this->db->limit($limit, $start);
        $query = $this->db->get("products");

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }


    public function searchProduct($productname){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->like('product_name',$productname);
        $query=$this->db->get();
        if($query->num_rows > 0){
            return $query->result();
        }else {
            return $query->result();
        }
    }

    public function get_all_categories($cat_url_name = null) {
        if ($cat_url_name) {
            $this->db->where('cat_url_name', $cat_url_name);
        }
        $query = $this->db->get('categories');
        return $query;
    }


    public function get_categories(){
        $query=$this->db->get('categories');
        return $query;

        foreach ($query->result() as $category)
        {
            $return[$category->cat_id] = $category;
        }

        return $return;
    }



    public function count_products(){

        return $this->db->count_all('products');

    }

    public function fetch_products($limit,$offset){

        $this->db->limit($limit,$offset);

        $query=$this->db->get('products');

        if($query->num_rows() > 0){

            return $query->result();
        }

        else{

            return $query->result();

        }

    }




}