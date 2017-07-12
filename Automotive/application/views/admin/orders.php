<!-- print order table-->

<div class="container-fluid">



    <?php foreach ($orders as $order ) :



        $order_id= $order['order_id'];

//$product_id=$order['product_id'];

        $date= $order['date'];

        $id= $order['cust_id'];

        ?>
        <table class="table table-hover">
            <thead>
            <tr>

                <th>Order id</th>

                <th>Date</th>

                <th>User id</th>

            </tr>

            </thead>

            <tbody>

            <tr>

                <td><?php echo $order_id?></td>

                <td><?php echo $date?></td>

                <td> <?php echo $id?></td>

            </tr>


            </tbody>

        </table>

    <?php endforeach ; ?>


    </table>

</div>
