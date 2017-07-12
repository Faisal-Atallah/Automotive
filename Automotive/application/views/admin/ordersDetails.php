

<!--print order details table -->

<div class="container-fluid">



    <?php foreach ($orders_detail as $detail ) :



        $order_id= $detail['order_id'];

//$product_id=$order['product_id'];

        $product_id= $detail['product_id'];

        $quantity=$detail['quantity'];

        $price= $detail['price'];

        ?>



        <table class="table table-hover">
            <thead>
            <tr>

                <th>Order id</th>

                <th>Product id</th>

                <th>Price</th>

            </tr>

            </thead>

            <tbody>

            <tr>

                <td> <?php echo $order_id?></td>

                <td><?php echo $quantity?></td>

                <td><?php echo $price?></td>

            </tr>


            </tbody>

        </table>

    <?php endforeach ; ?>




</div>
