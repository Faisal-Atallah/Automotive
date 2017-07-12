<html>
<head>
    <title>
        Login
    </title>
</head>
<body>
<div class="container-fluid"  id="logindiv">

    <!-- Modal -->
    <div class="modal fade" id="AdminLog" role="dialog">
        <div class="modal-dialog">

            <!--========================== Modal content ==========================-->
            <div class="modal-content">
                <!-----=================== Modal header  ===================================-->
                <div class="modal-header">
                    <button type="button" class="button" data-dismiss="modal" id="dismisslogin" title="Close"><img src="<?php echo base_url()?>public/Home/image/clo.png"></button>
                    <h4 class="modal-title" id="LoginHedar">Admin Login</h4>
                    <div class="col-sm-12 text-center" id="ADMS" style="font-size: 2em">
                        <?php echo validation_errors(); ?>
                    </div>

                </div>
                <!------===========================  Modal Body =====================================------->
                <div class="modal-body">
                    <!--==============================  Form   ====================================================-->
                    <form action="http://localhost/Automotive/admin/Login/validation_admin.html" method="post" id="AdminForm" data-toggle="validator">

                        <div class="row">
                            <div class="col-xs-8">
                                <div class="form-group has-feedback">
                                    <div class="input-group" >
                                        <span class="input-group-addon" id="emailaddon"><img  height="20px" src="<?php echo base_url('public/Home/image/envelope.png')?>"></span>
                                        <input type="email" class="form-control" placeholder="Email" name="emaillogin" id="emailLogin" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=========================  password   =========================================================-->
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="form-group has-feedback">
                                    <div class="input-group">
                                        <span class="input-group-addon"><img height="20px" src="<?php echo base_url('public/Home/image/padlock.png')?>" ></span>
                                        <input type="password" placeholder="Password" class="form-control" name="passwordlogin" id="passwordLogin" required>
                                    </div>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>

                                </div>
                            </div></div>
                        <!--================================= Modal Footer ===========================================--->
                        <div class="modal-footer">
                            <div class="row">

                                <button type="submit" class="btn btn-primary col-sm-3" id="loginbutton">Login <img src="<?php echo base_url()?>public/Home/image/logicon.png"/></button>
                                <button type="button" class="btn btn-primary col-sm-3" id="closelogin" data-dismiss="modal">Close <img src="<?php echo base_url()?>public/Home/image/icon.png"/></button>
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


