


    <link rel="stylesheet" href="<?php echo base_url()?>public/css/Cadillac/Cadillac.css">

    <style>
        /* home page*/

        .initiallyHidden { display: none; }

    </style>










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






