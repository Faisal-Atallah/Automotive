
    <html>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>


    <link href="<?php echo base_url('public/css/admin/dataTables.bootstrap.css')?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url()?>public/css/admin/body-sidebar.css">

    <link rel="stylesheet" href="<?php echo base_url()?>public/css/admin/ordersTable.css">

    <link rel="stylesheet" href="<?php echo base_url()?>public/css/admin/AdminArea.css">

    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

    <title>

    </title>

</head>

<body>



<nav class="navbar navbar-inverse navbar-fixed-top">
    <!-------container fluid------->
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url()?>/home/index" style="bottom:8px;position: relative">
                <img src="<?php echo base_url()?>public/Home/image/websiteLogo.png" style="width: 2em">
            </a>
            <a class="navbar-brand"><span style="color:#FDC501">Automotive</span><span> Spare</span><span style="color: #FDC501"> Parts</span></a>


            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


        </div><!--end navbar header-->

        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav">

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['isLoggedIn'])) { ?>

                    <li> <h3 style="color: whitesmoke"><?php echo $this->session->userdata('admin_name')?></h3></li>

                <?php } else { ?>


                <?php } ?>
                <li class="dropdown">
                    <a class="dropdown-toggle"data-toggle="dropdown" href=""><i class="fa fa-user fa-2x" aria-hidden="true"></i><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url()?>admin/Login/Logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>

                    </ul>
                </li>
            </ul>

        </div><!----end navbar collapse--->
    </div> <!--------end container fluid------>

</nav>







