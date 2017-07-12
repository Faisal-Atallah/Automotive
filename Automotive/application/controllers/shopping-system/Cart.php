<?php


class Cart extends CI_Controller

{


    function add()
    {
// Set array for send data.
        $insert_data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'qty' => 1
        );
// This function add items into cart.
        $this->cart->insert($insert_data);

// This will show insert data in cart.
        redirect('shop_pages/Cadillac/index');

    }




    function remove($rowid) {

        // Check rowid value.
        if ($rowid==="all"){

            // Destroy data which store in session.
            $this->cart->destroy();
        }else{
    // Destroy selected rowid in session.
            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );
    // Update cart data, after cancel.
            $this->cart->update($data);
        }

    // This will show cancel data in cart.
        redirect('shopping-system/Cart/display_cart');

    }




    function update_cart(){

// Recieve post values,calcute them and update
        $cart_info = $_POST['cart'] ;
        foreach( $cart_info as $id => $cart)
        {
            $rowid = $cart['rowid'];
            $price = $cart['price'];
            $amount = $price * $cart['qty'];
            $qty = $cart['qty'];

            $data = array(
                'rowid' => $rowid,
                'price' => $price,
                'amount' => $amount,
                'qty' => $qty
            );

            $this->cart->update($data);
        }
        redirect('shopping-system/Cart/display_cart');

    }


    public function display_cart(){

        $data['title']='Shopping Cart';

        $this->parser->parse('master/header', $data);

        $this->load->view('Cadillac/Cadilac_Menu');
        $this->load->view('Cadillac/Display_cart');
        $this->load->view('master/footer');

    }





}