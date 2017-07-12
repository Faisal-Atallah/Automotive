<!doctype>
<html>
<head>
<title>
</title>


    
<style>

</style>
    <link rel="stylesheet"  href="<?php echo base_url();?>public/css/register.css"/>

</head>
<body>



<div class="container-fluid"  id="RegContainer">

    <!-- Modal -->
    <div class="modal fade" id="signmodal" role="dialog">
        <div class="modal-dialog">

            <!--========================== Modal content ==========================-->
            <div class="modal-content">
                <!-----=================== Modal header  ===================================-->
                <div class="modal-header" id="HeadMdl">

                    <button type="button" class="button" id="headclose"

                            data-dismiss="modal">

                        <img src="<?php echo base_url()?>public/Home/image/clo.png">

                    </button>


                    <span><img src="<?php echo base_url('public/Home/image/creat.png')?>"></span>


                    <h3 class="modal-title">Create Account</h3>

                    <div class="col-sm-12 text-center" id="message">


                    </div>
                </div>
                <!------===========================  Modal Body =====================================------->
                <div class="modal-body">

                    <!--==============================  Form   ====================================================-->
                    <form action="http://localhost/Automotive/registration_system/Create_account/accept.html" method="post" accept-charset="utf-8" role="form" id="registerform">
                        <!--======================================== User Name ==  =====================================================-->
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><img style="height: 20px" src="<?php echo  base_url('public/Home/image/students-couple-full-body-view.png')?>"></span>
                                        <input type="text" class="form-control" placeholder="First Name" name="username">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--================================== Last Name ===========================================-->

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><img style="height: 20px" src="<?php echo  base_url('public/Home/image/family-o.png')?>"></span>
                                        <input type="text" class="form-control" placeholder="Last Name" name="lastname">
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <div class="row">
                            <!--======================================== email =============================================-->
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span  class="input-group-addon"><img  height="20px" src="<?php echo base_url('public/Home/image/envelope.png')?>"></span>
                                        <input type="email" name="email" placeholder="Email" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <!--======================================= password ===========================================-->
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div class="input-group">

                                        <span class="input-group-addon"><img style="height: 20px" src="<?php echo base_url('public/Home/image/lock.png')?>" ></span>

                                        <input type="password" name="password" class="form-control" placeholder="Password" id="password">
                                        <span class="glyphicon form-control-feedback" id="password1"></span>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--========================= Confirm password   =========================================================-->
                        <div class="row">
                            <div class="col-sm-8">

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><img style="height: 20px" src="<?php echo base_url()?>public/Home/image/confirm-purchase.png"></span>
                                        <input type="password" class="form-control" name="password_conf" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <!--============================================= date ==========================================-->
                            <div class="col-sm-8">
                                <div class="form-group ">
                                    <div class="input-group has-feedback">
                                        <span class="input-group-addon"><img style="height: 20px" src="<?php echo base_url('public/Home/image/ccaln.png')?>"></span>
                                        <input type="date" name="date" class="form-control">
                                    </div>
                                </div></div>
                        </div>
                        
                        <div class="row">
                            <!---===================================== Phone Number ========================================--->
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon"><img style="height: 20px" src="<?php echo base_url('public/Home/image/mobile-phone.png')?>"></span>

                                        <input type="tel" name="phonenum" placeholder="Mobile Number" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <!----==================================== Country ============================================---->
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><img style="height: 20px" src="<?php echo base_url('public/Home/image/jordan.png')?>"></span>
                                        <select id="country" name="country" class="form-control">

                                                      <option>Amman</option>
                                            <option>Irbid</option>
                                            <option>Al Salt</option>
                                            <option>Al Ramtha</option>
                                            <option>Madaba</option>
                                            <option>Mafraq</option>
                                            <option>Jerash</option>
                                            <option>Ma'an</option>
                                            <option>Tafilah</option>
                                            <option>Karak</option>
                                            <option>Ajloun</option>
                                            <option>Aqaba</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!---End country--->
                        </div>
                        <!--================================= Modal Footer ===========================================--->
                        <div class="modal-footer">
                            <div class="row">

                                <div class="col-sm-5">

                                    <button type="submit" name="submit" class="btn btn-default" id="submit">Submit <img src="<?php echo base_url()?>public/Home/image/sgn.png"/></button>
                                </div>
                                <div class="col-sm-5">
                                <button type="button" class="btn btn-default" data-dismiss="modal" id="close">Close <img src="<?php echo base_url()?>public/Home/image/icon.png"/></button>
                                 </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>



</body>
</html>
