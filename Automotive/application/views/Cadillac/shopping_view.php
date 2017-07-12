
<link rel="stylesheet" href="<?php echo base_url()?>public/css/Cadillac/escalade.css">


<link rel="stylesheet" href="<?php echo base_url()?>public/css/Cadillac/shopping_view.css"/>

<div class="container-fluid" id="display-product">


    <div class="row" id="cart">
        <div class="col-sm-12">
            <a href="<?php echo base_url()?>shopping-system/Cart/display_cart">
            <img src="<?php echo  base_url()?>public/Home/image/shopping-basket.png" style="float: right"/>
        </a>
        </div>
        </div>



    <div id="ProductResult">
        <div class="row">
            <div class="col-sm-12">
                <form method="post" action="<?php echo base_url().'shop_pages/Cadillac/searchProducts'?>">
                    <div class="input-group col-sm-12"><span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button" style="background-color: #1B1C1D;border-color:transparent ">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                        <input type="text" class="form-control input-lg" name="search" id="search"  placeholder="Search" />
                    </div>
                </form>
            </div>
        </div>

    </div>


    <div class="row">
       <div class="col-sm-3" >

           <div class="list-group">

               <?php foreach ($categories->result() as $category) : ?>
                   <?php echo anchor('shop_pages/Cadillac/index/'.$category->cat_url_name,$category->

                   cat_name, 'class="list-group-item"') ; ?>
               <?php endforeach ; ?>
           </div>
       </div>

    <div class="col-sm-9" id="">

        <?php foreach ($product as $row) :



            ?>

            <div class="col-sm-3">

                <div class="thumbnail">

                    <div class="caption">

                        <img src="<?php echo base_url().'/'.$row->product_image;?>"  height="30%" width="100%">

                        <p><?php echo $row->product_name; ?></p>

                        <p>Price</p>

                        <p><?php echo $row->produc_price; ?>  JOD</p>





                        <?php
                        // Create form and send values in 'shopping/add' function.
                        echo form_open('shopping-system/Cart/add');

                        echo form_hidden('id', $row->product_id);

                        echo form_hidden('name', $row->product_name);

                        echo form_hidden('price', $row->produc_price);

                        ?>

                        <?php

                      $btn="<button type='submit' class='btn btn-primary' name='action' title='Add to cart' id='addtocart'><i class=\"fa fa-cart-plus\" aria-hidden=\"true\"></i></button>";


                        // Submit Button.
                       // echo form_submit($btn);
                        echo $btn;
                        echo form_close();

                        ?>

                    </div>

                </div>

            </div>

        <?php endforeach ; ?>
         <div class="row">
             <div class="col-sm-12">
        <?php echo  $links?>
         </div>
         </div>
    </div>
</div>



</div>

<div class="Ser">
    <div class="initiallyHidden" id="Servicee" style="display:none;">
        <?php $this->load->view('master/Services')?>
    </div>

</div>

<div class="Abt">
    <div class="initiallyHidden" id="Aboutee" style="display: none">
        <?php $this->load->view('master/About')?>
    </div>
</div>
<div class="Cont">
    <div class="initiallyHidden" id="Contactee">
        <?php $this->load->view('master/Contact')?>
    </div>
</div>

<div id="mapWrapper">
    <div class="initiallyHidden" id="mapee">
        <?php $this->load->view('master/map')?>
    </div>
</div>