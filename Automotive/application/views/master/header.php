
<html>
    
    <head>

        <title>
            {title}
        </title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

        <link rel="stylesheet"  href="<?=base_url();?>public/css/header.css"/>

        <link rel="stylesheet"  href="<?=base_url();?>public/css/typography.css"/>


        <link rel="stylesheet"  href="<?php echo base_url();?>public/css/faq.css"/>

        <link rel="stylesheet"  href="<?php echo base_url();?>public/css/login.css"/>

        <link rel="stylesheet"  href="<?php echo base_url();?>public/css/body.css"/>

        <link rel="stylesheet"  href="<?php echo base_url();?>public/css/Services.css"/>

        <link rel="stylesheet"  href="<?php echo base_url();?>public/css/CarMenu.css"/>

        <link rel="stylesheet"  href="<?php echo base_url();?>public/css/HowWeWrk.css"/>

        <link rel="stylesheet"  href="<?php echo base_url();?>public/css/About.css"/>

        <link rel="stylesheet"  href="<?php echo base_url();?>public/css/Contact.css"/>

        <link rel="stylesheet"  href="<?php echo base_url();?>public/css/findUs.css"/>

        <link rel="stylesheet"  href="<?php echo base_url();?>public/css/Cadillac/Delivery.css"/>

        <link rel="stylesheet"  href="<?php echo base_url();?>public/css/cart/display-cart.css"/>


        <link rel="stylesheet"  href="<?php echo base_url();?>public/css/Cadillac/help-center.css"/>
        <link rel="stylesheet"  href="<?php echo base_url();?>public/css/footer.css"/>



        <link rel="stylesheet" href="<?php echo base_url();?>public/css/map.css"/>
        
        <link href='https://fonts.googleapis.com/css?family=Orbitron:700' rel='stylesheet' type='text/css'/>


        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>

    </head>

    <body>

<div class="container-fluid" style="position: relative">

    <nav class="navbar navbar-default navbar-fixed-top">
           <!-------container fluid------->
           <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url()?>master/home/index" style="bottom:5px;position: relative">
                        <img src="<?php echo base_url()?>public/Home/image/websiteLogo.png" style="width: 2em">
                    </a>
                    
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>


                </div><!--end navbar header-->

               <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav">

                    <li><a class="homeNav" href="#home"><i class="fa fa-home fa-2x"></i> Home</a></li>

                    <li id="rs"> <a class="serviceNav" href="#our" data-toggle="tooltip" title="Shop in website.."><i class="fa fa-wrench fa-2x"></i>Services</a></li>

                    <li><a class="aboutNav" href="#about" data-toggle="tooltip" title="About website.."><i class="fa fa-info fa-2x"></i> About</a></li>

                    <li><a class="contactNav" href="#Contact"  data-toggle="tooltip" title="Send Email.."> <i class="fa fa-mobile fa-2x"></i> ContactUS</a></li>



                    <li><a class="locationNav" href="#location" data-toggle="tooltip" title="Find Us.."> <i class="fa fa-map-marker fa-2x"></i> Locations</a></li>
                </ul>
                   
               <ul class="nav navbar-nav navbar-right">

                   <?php if (isset($_SESSION['isLoggedIn'])) { ?>

                     <li> <h3 style="color: whitesmoke"><?php echo $this->session->userdata('name')?></h3></li>

                   <?php } else { ?>
                       <li class="active"><a  id="sign" data-toggle="modal" title="Create Account" href="#signmodal">
                               <i class="fa fa-user-plus fa-2x"></i> Sign Up</a></li>

                   <?php } ?>

                   <?php if (isset($_SESSION['isLoggedIn'])) { ?>


                       <li class="dropdown">

                           <a class="dropdown-toggle"data-toggle="dropdown" href=""><i class="fa fa-user fa-2x" aria-hidden="true"></i><span class="caret"></span></a>

                           <ul class="dropdown-menu">
                               <li><a href="#"> <i class="fa fa-user" aria-hidden="true"></i> Profile
                                   </a> </li>
                               <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Setting
                                   </a></li>
                               <li><a  href="<?php echo base_url()?>home/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>

                           </ul>
                       </li>
                   <?php } else { ?>

                       <li><a id="LoginNav" data-toggle="modal" title="Get inside your profile" href="#log">
                               <i class="fa fa-sign-in fa-2x"></i> Login </a> </li>

                   <?php } ?>

               </ul>

               </div><!----end navbar collapse--->
           </div> <!--------end container fluid------>

        </nav>


</div>


        
       
        
       
        