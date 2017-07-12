
<!--- wrapper for services section --->

<div class="Ser">

    <!--- services container-->

    <div class="container-fluid" id="services" >

    <div class="row" id="services_row">

        <!-- spare parts -->

        <div class="col-md-4">

            <div class="services">

                <a id="shop_parts" data-toggle="collapse"  title="Click" data-placement="top" href="#cars_country"<span><img id="repair" src="<?php echo base_url('public/Home/image/repair.png')?>">

                </span>

                </a>

                <h1>Spare parts</h1>

                <p>check out the spare parts and accessories for different vehicles.</p>

            </div>

        </div><!-- end spare parts -->

        <!-- engine oil -->

        <div class="col-md-4">

            <div class="services">

                <span><img id="oil" src="<?php echo base_url('public/Home/image/oill.png')?>"></span>

                <h1>Engine oil</h1>

                <p>find the right engine oil</p>

            </div>

        </div><!-- end engine oil -->

        <!-- div wheel -->

        <div class="col-md-4">

            <div class="services">

                <img id="wheel" src="<?php echo base_url('public/Home/image/ransport.png')?>">

                <h1>Wheel and Tyre Parts</h1>

                <p>look for the wheels and tyres that suits your car the most.</p>

            </div>


        </div><!----------end div wheel--------------->

    </div><!---------------end div ourrow---------->


</div><!-----------------end website div content----------------->



</div>

<!-- load car menu --->

<?php         $this->load->view('master/carMenu');

?>