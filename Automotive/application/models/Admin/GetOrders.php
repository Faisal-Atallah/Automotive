<?php


class GetOrders extends CI_Model



{


    public function fetch_orders(){

        $query = $this->db->get('orders'); // Select the table products
        return $query->result_array(); // Return the results in a array.


    }




    public function fetch_orders_detail(){


        $query = $this->db->get('order_detail'); // Select the table products
        return $query->result_array(); // Return the results in a array.

    }


}