<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Shopping extends CI_Controller {



    
    public function Cart(){

        $this->load->view('header');
        $this->load->view('Cadillac/Cart_view');

        $this->load->view('delivery');
    }






}

?>
