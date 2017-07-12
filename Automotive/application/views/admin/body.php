<div class="container-fluid" id="sidebar">
    <div class="row">
        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav" style="margin-left:0;">

                    <li class="sidebar-brand active">

                        <a href="#menu-toggle"  id="menu-toggle" style="margin-top:20px;float:right;" > <i class="fa fa-bars " style="font-size:20px !Important;" aria-hidden="true" aria-hidden="true"></i>

                    </li>
                    <li>
                        <a data-toggle="pill" href="#home"><i class="fa fa-sort-alpha-asc " aria-hidden="true"> </i> <span style="margin-left:10px;">Home</span>  </a>
                    </li>
                    <li>
                        <a href="#orders" data-toggle="pill"> <i class="fa fa-play-circle-o " aria-hidden="true"> </i> <span style="margin-left:10px;"> Orders</span> </a>
                    </li>
                    <li>
                        <a href="#ordersDetail" data-toggle="pill"> <i class="fa fa-puzzle-piece" aria-hidden="true"> </i> <span style="margin-left:10px;">Orders detail</span> </a>
                    </li>
                    <li>
                        <a href="#products" data-toggle="pill"> <i class="fa fa-font" aria-hidden="true"> </i> <span style="margin-left:10px;">Products</span> </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-info-circle " aria-hidden="true"> </i> <span style="margin-left:10px;">Section </span> </a>
                    </li>
                    <li>
                        <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"> </i> <span style="margin-left:10px;"> Section</span> </a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="tab-content">

                                <div id="home" class="tab-pane fade in active">

                                    <h3>HOME</h3>
                                    <p>Some content.</p>

                                </div>

                                <div id="orders" class="tab-pane fade">

                                  <?php  $this->load->view('admin/orders');?>

                                </div>

                                <div id="ordersDetail" class="tab-pane fade">

                                    <?php $this->load->view('admin/ordersDetails');?>

                                </div>

                                <div id="products" class="tab-pane fade">

                                    <?php $this->load->view('site/product');?>

                                </div>



                            </div>


                        </div>
                    </div>