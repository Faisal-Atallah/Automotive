<!doctype>
<html>
<head>
    <title>
        ESCALADE
</title>
    <style>
        body{
            color: white;
            background-color: #0f0f0f;
            font-family: 'Orbitron', sans-serif;
        }
        #custom-search-input{
            padding: 3px;
            border: solid 1px #E4E4E4;
            border-radius: 6px;
            background-color: #fff;
        }
        #custom-search-input input{
            border: 0;
            box-shadow: none;

        }
        #custom-search-input button{
            margin: 2px 0 0 0;
            background: none;
            box-shadow: none;
            border: 0;
            color: #666666;
            padding: 0 8px 0 10px;
            border-left: solid 1px #ccc;
        }
        #custom-search-input button:hover{
            border: 0;
            box-shadow: none;
            border-left: solid 1px #ccc;

        }

        #custom-search-input .glyphicon-search{
            font-size: 23px;
        }

        .search{
            background-color: #FDC100;
            position: relative;
            padding: 8px;
            border-top-left-radius:3px;
            border-top-right-radius:3px;
            margin-top: 25px;

        }
        .float-box{
            border-top:1px solid #474747;
            margin-top: 13px;
            padding-top: 13px;

        }
        #Checkout{
            padding-top: 12px;
            padding-bottom: 12px;
            padding-right: 12px;
            padding-left: 12px;
            background-color: #1b6d85;
            font-size: 15px;
            color: #222222;
        }
        .box-heading{

          margin-top: 10%;
            left: 9%;
            position: relative;
            height: 10%;
            padding-bottom: 16px;
            text-transform: uppercase;
            border-top-left-radius: 3px;
            border-top-right-radius: 0;
            background-color: #1B6D85;
        }

        .box-heading h3{
            -webkit-margin-before: 1em;
            -webkit-margin-after: 1em;
            -webkit-margin-start: 0px;
            -webkit-margin-end: 0px;
            display: block;
        }
        .Box {
            margin-bottom: 30px;
        }

    </style>
</head>
<body>
<br><br><br>

<div class="row">
    <div class="col-md-12 text-center">
        <?php echo $pagination; ?>
    </div>
</div>
            <div class="row">
            <?php
            $this->load->view('Cadillac/Cadilac_Menu');
            ?>
            </div>
<div class="container-fluid">
<div class="page-header">
    <div class="row">
        <div class="float-box">
            <div class="col-sm-6 col-sm-push-6" >
                    <span style="">

                <img align="left" style="height: 50px" src="<?php echo base_url()?>public/Home/image/Cadilac/caart.png">
                   <h4 class="hidden-xs"> SHOPPING CART :</h4>

              </span>
            </div>
            <div class="col-sm-6">
                <button  style="float: right" id="Checkout" type="button" class="btn btn-primary">CHECKOUT</button>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-sm-3">

    </div>
    <div class="col-sm-9">
        <!--=================== Search  ================-->
        <div id="search" class="search">
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>

    </div>
    </div>

</div>
</div>
<div class="container-fluid">

<div class="col-sm-3">
    <div class="list-group">
        <?php foreach ($cat_query->result() as $row) : ?>
            <?php echo anchor('car_shop/Cadillac_Escalade/'.$row->cat_url_name, $row->
            cat_name, 'class="list-group-item"') ; ?>
        <?php endforeach ; ?>
    </div>

</div>
    
    <div class="col-sm-9">
        <div align="center">
            <h1 align="center">Products</h1>
            <table border="0" cellpadding="2px" width="600px">
                <?php
                foreach ($products as $product){
                $id = $product['product_id'];
                $name = $product['product_name'];

                $price = $product['produc_price'];
                ?>
                <tr>
                    <td><b><?php echo $name; ?></b><br />
                        Price:<big style="color:green">
                            $<?php echo $price; ?></big><br /><br />
                        <?php
                        echo form_open('cart/add');
                        echo form_hidden('id', $id);
                        echo form_hidden('name', $name);
                        echo form_hidden('price', $price);
                        echo form_submit('action', 'Add to Cart');
                        echo form_close();
                        ?>
                    </td>
                </tr>
                <tr><td colspan="2"><hr size="1" /></td>
                    <?php } ?>
            </table>
        </div>
    </div>

</div>
<?php
$cart = $this->cart->contents();
foreach ($cart as $contents) {
    ?><
    <?php echo $contents['name']; ?>
    <input type="text" value="<?php echo $contents['qty']; ?>">
    <?php echo $contents['price']; ?>


<?php } ?>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
</body>
</html>