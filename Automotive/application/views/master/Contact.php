<!---  div cont for jquery scroll--->
<div class="Cont">

   <!---ccontact us container div --->

<div id="Contact" class="container-fluid">

    <!-- div row header-->
    <div class="row" id="contactheader">

        <h1 class="col-sm-12 text-center">Contact Us</h1>

    </div>

    <div class="col-sm-8" id="sendemail">

        <h3>Email Us</h3>

         <!--- contact form--->
        <form action="http://localhost/Automotive/home/Contact.html" id="contact-form"  method="post">

             <!-- contact name row--->
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">

                        <!-- input name--->
                        <input type="text" class="form-control" name="name" placeholder="Name :" id="inpSendEml">
                    </div>
                </div>
            </div>

            <!-- contact email row--->
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">

                        <!--- input email--->
                        <input type="email" class="form-control" name="email" placeholder="Email :" id="inpEml">
                    </div>
                    <div class="er"></div>
                </div>
            </div>

            <!----subject contact row  ----->

            <div class="row">

                <div class="col-sm-8">
                    <div class="form-group">

                        <!--- subject input --->
                        <input type="text" class="form-control" name="subject" placeholder="Subject :" id="inpSubj">

                    </div>

                </div>

            </div>

            <!---message contact row ---->

            <div class="row">

                <div class="col-sm-8">

                    <div class="form-group">

                        <!-- message input--->

                <textarea class="form-control" name="message" rows="5" placeholder="Message :" id="inpMsg"></textarea>

                    </div>
                </div>
            </div>

             <!--- submit button row--->
            <div class="row">
                <div class="col-sm-8">
                    <div class=" form-group">
                         <!--  submit button--->
                        <button type="submit" class="col-sm-12" id="BtnSendEml">Send Email</button>

                    </div>
                </div>
            </div>

        </form><!--end form--->

        <div id="results"> <!-- result validation div-->
        </div>

    </div><!--- end send email col--->
    <!--======================================================= Contact Detail row==========================-->




    <div class="col-sm-4" id="contactdetal">

        <!--contact number info--->

        <div class="info-container">

            <h3>Contact Number</h3>

            <span class="info"><img  src="<?php echo base_url('public/Home/image/technology.png')?>"/>

        <p>0798433056</p></span>

        </div><!-- end div contact number--->


        <!--- email info--->
        <div class="info-container">
            <h3>Email</h3>
            <span class="info">
         <img src="<?php echo base_url('public/Home/image/mail.png')?>">
             <p>faisalattallah93@gmail.com</p></span>

        </div><!--end email info div--->




        <!-- street address info---->
        <div class="info-container">

            <h3>Come Visit</h3>

            <span class="info">

                <img src="<?php echo base_url('public/Home/image/gp.png')?>">

                <p>Al-Bunayyat، Amman 00962</p></span>
        </div><!----end street address link--->


        <!--- social links---->
            <div class="info-container">

            <h3 id="SocialHead">Social</h3>

                <ul class="list-inline">

                       <!-- facebook links--->
                    <li><a href="#"><span>  <img src="<?php echo base_url()?>public/Home/image/face.png"> </span> </a> </li>
                      <!---twitter links---->
                    <li><a href="#"> <span> <img src="<?php echo base_url()?>public/Home/image/twitter.png"> </span>  </a></li>
                     <!--- google links----->
                    <li><a href="#"><span> <img src="<?php echo base_url()?>public/Home/image/gogl.png"> </span> </a>  </li>

                </ul>

        </div><!-- end social link div--->

    </div><!-- end contact details column--->

</div><!-- end container fluid--->

    </div><!--end div cont--->
